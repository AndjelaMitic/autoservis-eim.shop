/* Arabic Translation for jQuery UI date picker plugin. */
/* Khaled Al Horani -- koko.dw@gmail.com */
/* خالد الحوراني -- koko.dw@gmail.com */
/* NOTE: monthNames are the original months names and they are the Arabic names, not the new months name فبراير - يناير and there isn't any Arabic roots for these months */
(function($) {
	$.datepick.regional['ar'] = {
		clearText: 'مسح', clearStatus: 'امسح التاريخ الحالي',
		closeText: 'إغلاق', closeStatus: 'إغلاق بدون حفظ',
		prevText: '&#x3c;السابق', prevStatus: 'عرض الشهر السابق',
		prevBigText: '&#x3c;&#x3c;', prevBigStatus: '',
		nextText: 'التالي&#x3e;', nextStatus: 'عرض الشهر القادم',
		nextBigText: '&#x3e;&#x3e;', nextBigStatus: '',
		currentText: 'اليوم', currentStatus: 'عرض الشهر الحالي',
		monthNames: ['كانون الثاني', 'شباط', 'آذار', 'نيسان', 'آذار', 'حزيران',
		'تموز', 'آب', 'أيلول', 'تشرين الأول', 'تشرين الثاني', 'كانون الأول'],
		monthNamesShort: ['1','2','3','4','5','6','7','8','9','10','11','12'],
		monthStatus: 'عرض شهر آخر', yearStatus: 'عرض سنة آخرى',
		weekHeader: 'أسبوع', weekStatus: 'أسبوع السنة',
		dayNames: [ 'الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
		dayNamesShort: [ 'أحد', 'اثنين', 'ثلاثاء', 'أربعاء', 'خميس', 'جمعة', 'سبت'],
		dayNamesMin: [ 'أحد', 'اثنين', 'ثلاثاء', 'أربعاء', 'خميس', 'جمعة', 'سبت'],
		dayStatus: 'اختر DD لليوم الأول من الأسبوع', dateStatus: 'اختر D, M d',
		dateFormat: 'dd/mm/yy', firstDay: 0,
		initStatus: 'اختر يوم', isRTL: true,
		showMonthAfterYear: false, yearSuffix: ''};
	$.datepick.setDefaults($.datepick.regional['ar']);
})(jQuery);
