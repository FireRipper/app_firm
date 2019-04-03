import $ from 'jquery'

$(document).ready(() => {
	$('#btn-go__to__top').fadeOut()
	$(window).scroll(() => {
		if ($(this).scrollTop() > 1000) {
			$('#btn-go__to__top').fadeIn()
		} else {
			$('#btn-go__to__top').fadeOut()
		}
	})

	$('#btn-go__to__top').click(() =>{
		$('html, body').animate({ scrollTop: 0 }, 800)
	})

	$('#form-registration-submit').click(()=>{
		const password = $('#password').val();
		const confirm_password = $('#confirm_password').val();

		if (password === '' || confirm_password ==='' || password !== confirm_password){
			console.log('password isn\'t confirm');

		} else {
			console.log('password confirm');
		}
	})

	function getPassword() {
		$.ajax({
			type:'POST',
			url:'/getmsg',
			data: {'password':password, 'confirm_password':confirm_password},
			headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
			success:(data)=>{

				/*if (password === confirm_password) {
					alert('Пароль потверждён')
				} else {
					alert('Введите пароль повторно правильно!')
				}*/
			}
		});
	}
})

