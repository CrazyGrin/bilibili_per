var choose_trigger = document.querySelector('.main_chose_button');
var choose_button = document.querySelector('.chose_file');
var submit_button = document.querySelector('.submit_file');


//改变视图
choose_trigger.addEventListener('click',function(){

	if (choose_button.value == ''){

		choose_button.click();

	};

});
choose_trigger.addEventListener('click',function(){

	if (choose_button.value != '') {

		submit_button.click();
		alert('submit!');
		
	};

});