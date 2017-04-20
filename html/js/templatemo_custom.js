/* Credit: http://www.templatemo.com */

$(document).ready(function(){

	//$('#service_tabs li:first-child').tab('show');

	$('#services .services_buttons li').each( function(){
		$(this).on('click', function(){
			change_panels( $(this).index() );
		});
	});
});

function change_panels(new_index){
	var arrow_positions = [ 20, 110, 205 ];
	var new_top = arrow_positions[new_index] + 'px';

	$('.arrow-left').animate({marginTop:new_top}, 500);
	$('#services_tabs li:nth-child('+(new_index+1)+')').tab('show');
	$('.services_buttons li').removeClass('active');
	$('.services_buttons li:nth-child('+(new_index+1)+')').addClass('active');
}

	//ajax contact
	var checkclick = false;   //检查是否提交过
	function to(){
		if(checkclick){
			$('#send').html('请不要重复提交！');
		}else{
			$.ajax({
			beforeSend:function(){     //发送之前
				$('#send').html('');    //清空字段
				$('#ready').show();     //显示加载
			},
			complete:function(){       //发送完成后
				$('#ready').hide();     //隐藏加载
			},
			url: 'send.php',
			type:'POST',
			data:$('#formid').serialize(),  //数据序列化
			success:function(){
				$('#send').html('发送成功！');
				$('#formid')[0].reset();      //重置表单
			}
		});
		checkclick = true;
		};
		return false;	
	}

var map = '';

function initialize() {
    var mapOptions = {
      zoom: 14,
      center: new google.maps.LatLng(16.8461789,96.1309764)
    };
    map = new google.maps.Map(document.getElementById('google_map'),  mapOptions);
}

// load google map
var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
        'callback=initialize';
    document.body.appendChild(script);