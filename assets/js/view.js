jQuery(document).ready(function($){
    //jQuery('.tooltips-chat').hide();
        setTimeout(function(){
            jQuery('.tooltips-chat').fadeIn();
        },20000)
        jQuery('.tooltips-chat .close').click(function(){
            jQuery('.tooltips-chat').fadeOut();
        })
    //console.log(countDownDate);
    var offset = 100;
    var speed = 250;
    var duration = 500;
        $(window).scroll(function(){
            if ($(this).scrollTop() < offset) {
              $('.topbutton') .fadeOut(duration);
            } else {
              $('.topbutton') .fadeIn(duration);
              //$('.topbutton').css("opacity", "0.5");
            }
        });
     $('.topbutton').on('click', function(){
        $('html, body').animate({scrollTop:0}, speed);
        return false;
        });
        $('.coblog-trigger-bottom').remove();
    $('body').on('mousewheel DOMMouseScroll', function(e){
      if(typeof e.originalEvent.detail == 'number' && e.originalEvent.detail !== 0) {
        if(e.originalEvent.detail > 0) {
          //console.log('Down');
          $('.topbutton').css("opacity", "0.5");
          $('.mobile-support').fadeOut();
        } else if(e.originalEvent.detail < 0){
            //console.log('Up');
            $('.mobile-support').fadeIn();
            $('.topbutton').css("opacity", "1");
        }
      } else if (typeof e.originalEvent.wheelDelta == 'number') {
        if(e.originalEvent.wheelDelta < 0) {
            //console.log('Down');
            //$('.mobile-support').fadeOut(1000);
            $('.topbutton').css("opacity", "0.5");
        } else if(e.originalEvent.wheelDelta > 0) {
            //console.log('Up');
            $('.topbutton').css("opacity", "1");
            //$('.mobile-support').fadeIn(1000);
        }
      }
    });
    // scroll mobile 
     var lastScrollTop = 100;
    window.addEventListener("scroll", function () {
     var st = window.pageYOffset || document.documentElement.scrollTop;
        if (st > lastScrollTop) {
           // $('.mobile-support').fadeOut();
            $('.topbutton').css("opacity", "0.5");
        } else {
           // $('.mobile-support').fadeIn();
            $('.topbutton').css("opacity", "1");
        }
        lastScrollTop = st <= 100 ? 100 : st;
      });
    $('.btn-header #myBtn').on('click', function(){
        $('.modal').css('display','block');
    });  
    $('.mobile-support .myBtn').on('click', function(){
        $('.modal').css('display','block');
    });
    $('.modal-content .pop-close').on('click', function(){
        $('.modal').css('display','none');
    });
    $('.btn-popup').on('click', function(){
        $('.modal').css('display','block');
    });
});
const links = document.querySelectorAll('.share a');

function onClick(event) {
	event.preventDefault();

	window.open(
		event.currentTarget.href,
		'share',
		'width=600,height=500,location=no,menubar=no,toolbar=no'
	);
}

links.forEach((link) => {
	const url = encodeURIComponent(window.location.origin + window.location.pathname);
	const title = encodeURIComponent(document.title);

	link.href = link.href
		.replace('{url}', url)
		.replace('{title}', title);

	link.addEventListener('click', onClick);
});

function vietnameseSlug(title) {
  var slug = title.toLowerCase();

  // Chuyển đổi các ký tự có dấu sang không dấu
  slug = slug.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
  slug = slug.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
  slug = slug.replace(/ì|í|ị|ỉ|ĩ/g, "i");
  slug = slug.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
  slug = slug.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
  slug = slug.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
  slug = slug.replace(/đ/g, "d");

  // Xóa các ký tự đặc biệt
  slug = slug.replace(/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/g, "");

  // Thay thế khoảng trắng bằng dấu gạch ngang
  slug = slug.replace(/ /g, "-");

  // Loại bỏ các ký tự gạch ngang thừa ở đầu và cuối chuỗi và các dấu gạch ngang liên tiếp
  slug = slug.replace(/^-+|-+$/g, "");
  slug = slug.replace(/-+/g, "-");

  return slug;
}

jQuery(document).ready(function($){
  var methodCount = 1; // Đếm số lượng các mục "methods"
  $('h2').each(function(){
      if ($(this).attr('data-toc') === 'no') {
          return; // Bỏ qua tiêu đề có data-toc="no"
      }

      var id = $(this).attr('id'); // Lấy ID hiện có hoặc tạo mới nếu không tồn tại
      if (!id) {
          id = 'section_' + methodCount;
          $(this).attr('id', id);
      }

      var title = $(this).text();
      var slug = vietnameseSlug(title); // Chuyển tiêu đề có dấu thành không dấu

      var tocItem = '<div class="method_toc_item toc_method" data-section="#'+ slug +'">' +
                     '<a href="#'+ slug +'">' + title + '</a></div>';

      $('#method_toc_list').append(tocItem);
      methodCount++;
  });
});

jQuery(document).ready(function($) {
  if (typeof customViewAjax !== 'undefined') {
      var postID = customViewAjax.post_id;

      $.ajax({
          type: 'POST',
          url: customViewAjax.ajax_url,
          data: {
              action: 'ajax_set_post_views',
              postID: postID,
              security: customViewAjax.security
          },
          success: function(response) {
              if (!response.success) {
                  console.error('Error:', response.data);
              }
          },
          error: function() {
              console.error('AJAX request failed.');
          }
      });
  } else {
      console.error('customViewAjax is not defined.');
  }
});



