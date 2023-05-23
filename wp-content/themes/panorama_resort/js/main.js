
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
// book now end 
$(document).ready(function () {
    $('.youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        autoplay: true,
    });
});
$(document).ready(function () {
    window.addEventListener("scroll", function () {
        var header = document.querySelector(".header");
        header.classList.toggle("sticky-bar", window.scrollY > 50);
    });

});

// youtube video end 

var monthFormatter = new Intl.DateTimeFormat("en-us", { month: "long" });
var weekdayFormatter = new Intl.DateTimeFormat("en-us", { weekday: "long" });

var dates = [];
dates[0] = new Date(); // defaults to today
dates[1] = addDays(dates[0], 31);

var currentDate = 0; // index into dates[]
var previousDate = 1;

var datesBoxes = $(".date-picker-date");
var displayBoxes = $(".date-picker-display");


var windowWidth = 300;
var colourPickerWidth = 300;

// set up dates
$(document).ready(function () {

    updateDatePicker();


    $(datesBoxes[0]).text(getDateString(dates[0]));
    $(datesBoxes[1]).text(getDateString(dates[1]));

    $(displayBoxes[0]).text(dates[0].getDate() + " " + monthFormatter.format(dates[0]).slice(0, 3));
    $(displayBoxes[1]).text(dates[1].getDate() + " " + monthFormatter.format(dates[1]).slice(0, 3));
});

// add event listeners
$(document).ready(function () {

    // has to be applied each time, as it's removed when calendar is reset
    applyDateEventListener();

    $(".date-picker-date").click(function (e) {

        // if active, toggle picker off and return
        var currentlyActive = $(this).hasClass("active");
        if (currentlyActive) {
            $(this).removeClass("active");
            hideDatePicker();
            return;
        }

        $(".date-picker-date").removeClass("active");
        $(this).addClass("active");

        // update currentDate
        previousDate = currentDate;
        if ($(this)[0].id == "date-picker-date-first") {
            currentDate = 0;
        } else {
            currentDate = 1;
        }

        // update calendar
        showDatePicker(e);
        updateDatePicker();
    });

    $("#date-picker-next-month").click(function () {
        changeMonth("Next");
    });

    $("#date-picker-previous-month").click(function () {
        changeMonth("Previous");
    });

    $("#date-picker-exit").click(function () {
        hideDatePicker();
    });

    $(document).click(function (e) {
        var target = $(e.target);
        var clickedOnPicker = (target.closest("#date-picker-modal").length);
        var clickedOnDate = (target.closest(".date-picker-date").length);
        var isPreviousOrNext = target.hasClass("previous-month") || target.hasClass("next-month");

        if (!(clickedOnPicker || clickedOnDate || isPreviousOrNext)) {
            hideDatePicker();
        }
    });

});

// called on initialising (set to today) and then every time the month changes or on moving between dates
function updateDatePicker(changeMonth = false) {

    var datePicker = $("#date-picker");
    var curDate = dates[currentDate]; // shorthand

    // check if it needs to update
    // updates if changed month directly (changeMonth) or if switched to other .date-picker-date and month is different (differentMonth)
    var differentMonth = checkChangedMonth();
    if (changeMonth === false && differentMonth === false) { return; }

    updatePickerMonth();

    // clear out all tr instances other than the header row
    // really just removing all rows and appending header row straight back in
    var headerRow = `
    <tr id="date-picker-weekdays">
      <th>S</th>
      <th>M</th>
      <th>T</th>
      <th>W</th>
      <th>T</th>
      <th>F</th>
      <th>S</th>
    </tr>`;
    // clear all rows
    datePicker.contents().remove();
    datePicker.append(headerRow);

    var todayDate = curDate.getDate();
    var firstOfMonth = new Date(curDate.getFullYear(), curDate.getMonth(), 1);
    var firstWeekday = firstOfMonth.getDay(); // 0-indexed; 0 is Sunday, 6 is Saturday
    var lastMonthToInclude = firstWeekday; // happily, this just works as-is.
    var firstOfNextMonth = addMonths(firstOfMonth, 1);
    var lastOfMonth = addDays(firstOfNextMonth, -1).getDate();

    var openRow = "<tr class='date-picker-calendar-row'>";
    var closeRow = "</tr>";
    var currentRow = openRow;

    // Add in as many of last month as required
    if (lastMonthToInclude > 0) {
        var lastMonthLastDay = addDays(firstOfMonth, -1);
        var lastMonthDays = lastMonthLastDay.getDate();
        var lastMonthStartAdding = lastMonthDays - lastMonthToInclude + 1;

        // add days from previous month
        // takes arguments (start loop, end loop <=, counter, 'true' if current month OR class if another month (optional, default "") )
        //addToCalendar(lastMonthStartAdding, lastMonthDays, 0, "previous-month");
        //addToCalendar(lastMonthStartAdding, lastMonthDays, 0, "month-previous");
        addToCalendar(lastMonthStartAdding, lastMonthDays, 0, "previous-month");
    }

    // fill out rest of row with current month
    // doesn't matter how many of last month were included, all accounted for
    addToCalendar(1, 7 - lastMonthToInclude, lastMonthToInclude, true);

    // reset for current month generation
    currentRow = openRow;

    var counter = 7;
    var addedFromCurrentMonth = 7 - firstWeekday + 1;

    addToCalendar(addedFromCurrentMonth, lastOfMonth, counter, true);

    // at this point, counter = all of this month + whatever was included from last month
    counter = lastMonthToInclude + lastOfMonth;
    var nextMonthToInclude = counter % 7 === 0 ? 0 : 7 - (counter % 7);

    addToCalendar(1, nextMonthToInclude, counter, "next-month");

    // add event listener again
    applyDateEventListener();

    // update current date box
    updateDateShown();



    function checkChangedMonth() {
        // updates if changed month directly (changeMonth) or if switched to other .date-picker-date and month is different (differentMonth)
        var differentMonth = false;
        // checks if it's the same date again
        if (currentDate !== previousDate) {
            // if either month or year are different then month has changed
            if (dates[0].getMonth() !== dates[1].getMonth() || dates[0].getYear() !== dates[1].getYear()) {
                differentMonth = true;
            }
        }

        return differentMonth;

    }

    function addToCalendar(start, end, counter, cellClass) {

        var currentMonth = cellClass === true ? true : false;

        for (var i = start; i <= end; i++) {
            counter += 1;
            if (i === todayDate && currentMonth) {
                currentRow += `<td class="active">${i}</td>`;
            } else if (cellClass && !currentMonth) {
                currentRow += `<td class="${cellClass}">${i}</td>`;
            } else {
                currentRow += `<td>${i}</td>`;
            }
            if (counter % 7 === 0) {
                datePicker.append(currentRow + closeRow);
                currentRow = openRow;
            }
        }
    }
}

function updatePickerMonth() {
    var monthName = monthFormatter.format(dates[currentDate]);
    var year = dates[currentDate].getFullYear();
    var dateText = monthName + " " + year;
    $("#date-picker-month").text(dateText);
}

function dateSelected(currentDay) {

    // update the active .date-picker-date with the current date
    var activeDate = $($(".date-picker-date.active")[0]);

    // get current date and update
    dates[currentDate].setDate(currentDay);
    updateDateShown();
}

// 'direction' can be either "Next" or "Previous"
function changeMonth(direction) {

    var increment = direction === "Next" ? 1 : -1;

    // change month
    dates[currentDate] = addMonths(dates[currentDate], increment);

    // change month name in picker
    updatePickerMonth();

    // update calendar
    // passes 'true' that month has changed
    updateDatePicker(true);
}

function showDatePicker(e) {

    var pxFromTop = $(".date-picker-date").offset().top;
    var datePicker = $("#date-picker-modal");
    datePicker.css("top", pxFromTop + 40);
    // check if right edge of colourPicker will go off the edge of the screen, and if so then reduce left by that amount
    var rightEdge = e.pageX + colourPickerWidth;
    var overflowWidth = rightEdge - windowWidth;
    if (overflowWidth > 0) {
        datePicker.css("left", e.pageX - overflowWidth);
    } else {
        datePicker.css("left", e.pageX);
    }

    $("#date-picker-modal").removeClass("hidden-2");
}

function hideDatePicker() {
    $(".date-picker-date").removeClass("active");
    $("#date-picker-modal").addClass("hidden-2");
}

function applyDateEventListener() {

    $("#date-picker td").click(function () {

        // Calendar UI
        $("#date-picker td").removeClass("active");
        $(this).addClass("active");

        // update variables
        currentDay = $(this).text();

        // update the current date
        dateSelected(currentDay);

        // change month based on calendar day class
        if ($(this).hasClass("previous-month")) {
            changeMonth("Previous");
        } else if ($(this).hasClass("next-month")) {
            changeMonth("Next");
        } else {
            // clicked in current month; made selection so hide picker again
            hideDatePicker();
        }
    });

}


$(document).ready(function () {
    updateWidths();
});

$(window).resize(function () {
    updateWidths();
});

function updateWidths() {
    windowWidth = $(window).width();
}

// courtesy of https://stackoverflow.com/questions/563406/add-days-to-javascript-date
function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result;
}

function addMonths(date, months) {
    var result = new Date(date);
    result.setMonth(result.getMonth() + months);
    return result;
}

// courtesy of https://stackoverflow.com/a/15764763/7170445
function getDateString(date) {
    var year = date.getFullYear();

    var month = (1 + date.getMonth()).toString();
    month = month.length > 1 ? month : '0' + month;

    var day = date.getDate().toString();
    day = day.length > 1 ? day : '0' + day;

    return day + '/' + month + '/' + year;
}

function updateDateShown() {
    var formattedDate = getDateString(dates[currentDate]);
    var updateDateBox = $(datesBoxes[currentDate]);

    var updateDisplayBox = $(displayBoxes[currentDate]);
    var dayAndMonth = dates[currentDate].getDate() + " " + monthFormatter.format(dates[currentDate]).slice(0, 3);

    updateDateBox.text(formattedDate);
    updateDisplayBox.text(dayAndMonth);
}

jQuery(document).ready(function ($) {
    var isLateralNavAnimating = false;

    //open/close lateral navigation
    $('.cd-nav-trigger').on('click', function (event) {
        event.preventDefault();
        //stop if nav animation is running 
        if (!isLateralNavAnimating) {
            if ($(this).parents('.csstransitions').length > 0) isLateralNavAnimating = true;

            $('body').toggleClass('navigation-is-open');
            $('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                //animation is over
                isLateralNavAnimating = false;
            });
        }
    });
});


//courtesy to the super coder I can't recall
! function (e) {
    "use strict";

    function t(e) {
        return new RegExp("(^|\\s+)" + e + "(\\s+|$)")
    }

    function s(e, t) {
        var s = l(e, t) ? i : n;
        s(e, t)
    }
    var l, n, i;
    "classList" in document.documentElement ? (l = function (e, t) {
        return e.classList.contains(t)
    }, n = function (e, t) {
        e.classList.add(t)
    }, i = function (e, t) {
        e.classList.remove(t)
    }) : (l = function (e, s) {
        return t(s).test(e.className)
    }, n = function (e, t) {
        l(e, t) || (e.className = e.className + " " + t)
    }, i = function (e, s) {
        e.className = e.className.replace(t(s), " ")
    });
    var c = {
        hasClass: l,
        addClass: n,
        removeClass: i,
        toggleClass: s,
        has: l,
        add: n,
        remove: i,
        toggle: s
    };
    "function" == typeof define && define.amd ? define(c) : e.classie = c
}(window),
    function (e) {
        "use strict";

        function t(e, t) {
            if (!e) return !1;
            for (var s = e.target || e.srcElement || e || !1; s && s != t;) s = s.parentNode || !1;
            return s !== !1
        }

        function s(e, t) {
            for (var s in t) t.hasOwnProperty(s) && (e[s] = t[s]);
            return e
        }

        function l(e, t) {
            this.el = e, this.options = s({}, this.options), s(this.options, t), this._init()
        }
        l.prototype.options = {
            newTab: !0,
            stickyPlaceholder: !0,
            onChange: function () {
                return !1
            }
        }, l.prototype._init = function () {
            var e = this.el.querySelector("option[selected]");
            this.hasDefaultPlaceholder = e && e.disabled, this.selectedOpt = e || this.el.querySelector("option"), this._createSelectEl(), this.selOpts = [].slice.call(this.selEl.querySelectorAll("li[data-option]")), this.selOptsCount = this.selOpts.length, this.current = this.selOpts.indexOf(this.selEl.querySelector("li.cs-selected")) || -1, this.selPlaceholder = this.selEl.querySelector("span.cs-placeholder"), this._initEvents()
        }, l.prototype._createSelectEl = function () {
            var e = "",
                t = function (e) {
                    var t = "",
                        s = "",
                        l = "";
                    return !e.selectedOpt || this.foundSelected || this.hasDefaultPlaceholder || (s += "cs-selected ", this.foundSelected = !0), e.getAttribute("data-class") && (s += e.getAttribute("data-class")), e.getAttribute("data-link") && (l = "data-link=" + e.getAttribute("data-link")), "" !== s && (t = 'class="' + s + '" '), "<li " + t + l + ' data-option data-value="' + e.value + '"><span>' + e.textContent + "</span></li>"
                };
            [].slice.call(this.el.children).forEach(function (s) {
                if (!s.disabled) {
                    var l = s.tagName.toLowerCase();
                    "option" === l ? e += t(s) : "optgroup" === l && (e += '<li class="cs-optgroup"><span>' + s.label + "</span><ul>", [].slice.call(s.children).forEach(function (s) {
                        e += t(s)
                    }), e += "</ul></li>")
                }
            });
            var s = '<div class="cs-options"><ul>' + e + "</ul></div>";
            this.selEl = document.createElement("div"), this.selEl.className = this.el.className, this.selEl.tabIndex = this.el.tabIndex, this.selEl.innerHTML = '<span class="cs-placeholder">' + this.selectedOpt.textContent + "</span>" + s, this.el.parentNode.appendChild(this.selEl), this.selEl.appendChild(this.el)
        }, l.prototype._initEvents = function () {
            var e = this;
            this.selPlaceholder.addEventListener("click", function () {
                e._toggleSelect()
            }), this.selOpts.forEach(function (t, s) {
                t.addEventListener("click", function () {
                    e.current = s, e._changeOption(), e._toggleSelect()
                })
            }), document.addEventListener("click", function (s) {
                var l = s.target;
                e._isOpen() && l !== e.selEl && !t(l, e.selEl) && e._toggleSelect()
            }), this.selEl.addEventListener("keydown", function (t) {
                var s = t.keyCode || t.which;
                switch (s) {
                    case 38:
                        t.preventDefault(), e._navigateOpts("prev");
                        break;
                    case 40:
                        t.preventDefault(), e._navigateOpts("next");
                        break;
                    case 32:
                        t.preventDefault(), e._isOpen() && "undefined" != typeof e.preSelCurrent && -1 !== e.preSelCurrent && e._changeOption(), e._toggleSelect();
                        break;
                    case 13:
                        t.preventDefault(), e._isOpen() && "undefined" != typeof e.preSelCurrent && -1 !== e.preSelCurrent && (e._changeOption(), e._toggleSelect());
                        break;
                    case 27:
                        t.preventDefault(), e._isOpen() && e._toggleSelect()
                }
            })
        }, l.prototype._navigateOpts = function (e) {
            this._isOpen() || this._toggleSelect();
            var t = "undefined" != typeof this.preSelCurrent && -1 !== this.preSelCurrent ? this.preSelCurrent : this.current;
            ("prev" === e && t > 0 || "next" === e && t < this.selOptsCount - 1) && (this.preSelCurrent = "next" === e ? t + 1 : t - 1, this._removeFocus(), classie.add(this.selOpts[this.preSelCurrent], "cs-focus"))
        }, l.prototype._toggleSelect = function () {
            this._removeFocus(), this._isOpen() ? (-1 !== this.current && (this.selPlaceholder.textContent = this.selOpts[this.current].textContent), classie.remove(this.selEl, "cs-active")) : (this.hasDefaultPlaceholder && this.options.stickyPlaceholder && (this.selPlaceholder.textContent = this.selectedOpt.textContent), classie.add(this.selEl, "cs-active"))
        }, l.prototype._changeOption = function () {
            "undefined" != typeof this.preSelCurrent && -1 !== this.preSelCurrent && (this.current = this.preSelCurrent, this.preSelCurrent = -1);
            var t = this.selOpts[this.current];
            this.selPlaceholder.textContent = t.textContent, this.el.value = t.getAttribute("data-value");
            var s = this.selEl.querySelector("li.cs-selected");
            s && classie.remove(s, "cs-selected"), classie.add(t, "cs-selected"), t.getAttribute("data-link") && (this.options.newTab ? e.open(t.getAttribute("data-link"), "_blank") : e.location = t.getAttribute("data-link")), this.options.onChange(this.el.value)
        }, l.prototype._isOpen = function () {
            return classie.has(this.selEl, "cs-active")
        }, l.prototype._removeFocus = function () {
            var e = this.selEl.querySelector("li.cs-focus");
            e && classie.remove(e, "cs-focus")
        }, e.SelectFx = l
    }(window),
    function () {
        [].slice.call(document.querySelectorAll("select.cs-select")).forEach(function (e) {
            new SelectFx(e)
        })
    }();

// date end 

// side menu start 
const nav = document.querySelector('#nav');
const menu = document.querySelector('#menu');
const menuToggle = document.querySelector('.nav__toggle');
let isMenuOpen = false;



menuToggle.addEventListener('click', e => {
    e.preventDefault();
    isMenuOpen = !isMenuOpen;


    menuToggle.setAttribute('aria-expanded', String(isMenuOpen));
    menu.hidden = !isMenuOpen;
    nav.classList.toggle('nav--open');
});



nav.addEventListener('keydown', e => {

    if (!isMenuOpen || e.ctrlKey || e.metaKey || e.altKey) {
        return;
    }


    const menuLinks = menu.querySelectorAll('.nav__link');
    if (e.keyCode === 9) {
        if (e.shiftKey) {
            if (document.activeElement === menuLinks[0]) {
                menuToggle.focus();
                e.preventDefault();
            }
        } else if (document.activeElement === menuToggle) {
            menuLinks[0].focus();
            e.preventDefault();
        }
    }
});

// side menu end 
$('.main_slider').slick({
    autoplay: true,
    arrows: false,
    autoplaySpeed: 2000,
    dots: false,
    infinite: true,
    speed: 1000,
    fade: true,
    slide: 'div',
    slidesToShow: 1,
    slidesToScroll: 1,
    cssEase: 'linear',

});
// home slider end 

$('.view_slider').slick({
    autoplay: true,
    arrows: true,
    autoplaySpeed: 2000,
    dots: false,
    infinite: true,
    speed: 1000,
    fade: false,
    slide: 'div',
    slidesToShow: 1,
    slidesToScroll: 1,
    cssEase: 'linear',

});
// testimonial end 
$('.activites_slider').slick({
    autoplay: true,
    arrows: false,
    autoplaySpeed: 2000,
    dots: false,
    infinite: true,
    speed: 1000,
    fade: false,
    slide: 'div',
    slidesToShow: 3,
    slidesToScroll: 1,
    cssEase: 'linear',
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
       

  ]

});
// activities end 

var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});

// slide up end 
class readMore {
    constructor() {
        this.content = '.readmore__content';
        this.buttonToggle = '.readmore__toggle';
    }

    bootstrap() {
        this.setNodes();
        this.init();
        this.addEventListeners();
    }

    setNodes() {
        this.nodes = {
            contentToggle: document.querySelector(this.content)
        };

        this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(this.buttonToggle);
    }

    init() {
        const { contentToggle } = this.nodes;

        this.stateContent = contentToggle.innerHTML;

        contentToggle.innerHTML = `${this.stateContent.substring(0, 800)}...`;
    }

    addEventListeners() {
        this.buttonToggle.addEventListener('click', this.onClick.bind(this))
    }

    onClick(event) {
        const targetEvent = event.currentTarget;
        const { contentToggle } = this.nodes

        if (targetEvent.getAttribute('aria-checked') === 'true') {
            targetEvent.setAttribute('aria-checked', 'false')
            contentToggle.innerHTML = this.stateContent;
            this.buttonToggle.innerHTML = 'Show Less'

        } else {
            targetEvent.setAttribute('aria-checked', 'true')
            contentToggle.innerHTML = `${this.stateContent.substring(0, 800)}...`
            this.buttonToggle.innerHTML = 'Show more'
        }
    }
}


const initReadMore = new readMore();
initReadMore.bootstrap()
//about read more end





// $(document).ready(function () {

//     $("#myModal").modal("show");
//     $("#myModal").on("shown.bs.modal", function (e) {
//         const video = document.getElementById("videoModal");
//         video.play();
//     });

// });

// video model end 







function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


document.getElementById("defaultOpen").click();
// room tab end


// slider down start
$(function () {
    $('.scroll-down').click(function () {
        $('html, body').animate({ scrollTop: $('section#about').offset().top }, 'slow');
        return false;
    });
});
// slider down end


