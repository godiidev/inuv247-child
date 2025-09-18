/* Custom JS for TOC in methods page */
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