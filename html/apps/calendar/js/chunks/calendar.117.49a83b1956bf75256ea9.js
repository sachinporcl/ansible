(window.webpackJsonp=window.webpackJsonp||[]).push([[117],{487:function(_,e,t){!function(_){"use strict";function e(_,e){var t=_.split("_");return e%10==1&&e%100!=11?t[0]:e%10>=2&&e%10<=4&&(e%100<10||e%100>=20)?t[1]:t[2]}function t(_,t,s){return"m"===s?t?"хвилина":"хвилину":"h"===s?t?"година":"годину":_+" "+e({ss:t?"секунда_секунди_секунд":"секунду_секунди_секунд",mm:t?"хвилина_хвилини_хвилин":"хвилину_хвилини_хвилин",hh:t?"година_години_годин":"годину_години_годин",dd:"день_дні_днів",MM:"місяць_місяці_місяців",yy:"рік_роки_років"}[s],+_)}function s(_,e){var t={nominative:"неділя_понеділок_вівторок_середа_четвер_п’ятниця_субота".split("_"),accusative:"неділю_понеділок_вівторок_середу_четвер_п’ятницю_суботу".split("_"),genitive:"неділі_понеділка_вівторка_середи_четверга_п’ятниці_суботи".split("_")};return!0===_?t.nominative.slice(1,7).concat(t.nominative.slice(0,1)):_?t[/(\[[ВвУу]\]) ?dddd/.test(e)?"accusative":/\[?(?:минулої|наступної)? ?\] ?dddd/.test(e)?"genitive":"nominative"][_.day()]:t.nominative}function n(_){return function(){return _+"о"+(11===this.hours()?"б":"")+"] LT"}}_.defineLocale("uk",{months:{format:"січня_лютого_березня_квітня_травня_червня_липня_серпня_вересня_жовтня_листопада_грудня".split("_"),standalone:"січень_лютий_березень_квітень_травень_червень_липень_серпень_вересень_жовтень_листопад_грудень".split("_")},monthsShort:"січ_лют_бер_квіт_трав_черв_лип_серп_вер_жовт_лист_груд".split("_"),weekdays:s,weekdaysShort:"нд_пн_вт_ср_чт_пт_сб".split("_"),weekdaysMin:"нд_пн_вт_ср_чт_пт_сб".split("_"),longDateFormat:{LT:"HH:mm",LTS:"HH:mm:ss",L:"DD.MM.YYYY",LL:"D MMMM YYYY р.",LLL:"D MMMM YYYY р., HH:mm",LLLL:"dddd, D MMMM YYYY р., HH:mm"},calendar:{sameDay:n("[Сьогодні "),nextDay:n("[Завтра "),lastDay:n("[Вчора "),nextWeek:n("[У] dddd ["),lastWeek:function(){switch(this.day()){case 0:case 3:case 5:case 6:return n("[Минулої] dddd [").call(this);case 1:case 2:case 4:return n("[Минулого] dddd [").call(this)}},sameElse:"L"},relativeTime:{future:"за %s",past:"%s тому",s:"декілька секунд",ss:t,m:t,mm:t,h:"годину",hh:t,d:"день",dd:t,M:"місяць",MM:t,y:"рік",yy:t},meridiemParse:/ночі|ранку|дня|вечора/,isPM:function(_){return/^(дня|вечора)$/.test(_)},meridiem:function(_,e,t){return _<4?"ночі":_<12?"ранку":_<17?"дня":"вечора"},dayOfMonthOrdinalParse:/\d{1,2}-(й|го)/,ordinal:function(_,e){switch(e){case"M":case"d":case"DDD":case"w":case"W":return _+"-й";case"D":return _+"-го";default:return _}},week:{dow:1,doy:7}})}(t(369))}}]);
//# sourceMappingURL=calendar.117.49a83b1956bf75256ea9.js.map