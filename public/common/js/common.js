
$('#addMember').on('click',function(){
$('.addBtn').before('<li><div class="delete"><img src="common/img/ico_close.svg" alt=""></div><ul class="info"><li><input type="text" placeholder="お名前" name="data[name][]" class="validate[required]"></li><li><input type="text" placeholder="住所" name="data[address][]" class="validate[required]"></li><li><input type="text" placeholder="年齢" name="data[age][]" class="validate[required,custom[number],maxSize[3]]">歳</li><li><select name="data[gender][]" class="validate[required]"><option>男性</option><option>女性</option></select></li><li><input type="text" placeholder="連絡先" name="data[contact][]" class="validate[required]"></li></ul></li>');
});


$(document).on("click",".delete", function(){
	$(this).parent().remove();
});



$(function() {
	var param = location.search.substring(1);
	for(var i = 0; i < param; i++){
		$('.addBtn').before('<li><div class="delete"><img src="common/img/ico_close.svg" alt=""></div><ul class="info"><li><input type="text" placeholder="お名前"></li><li><input type="text" placeholder="住所"></li><li><input type="text" placeholder="年齢">歳</li><li><select><option>男性</option><option>女性</option></select></li><li><input type="text" placeholder="連絡先"></li></ul></li>');
	}

	$("#passenger_list_form").validationEngine({
    validateNonVisibleFields: true,
    promptPosition: 'bottomLeft'
  }
  );

});
