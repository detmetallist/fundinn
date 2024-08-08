jQuery(document).ready(function($){
	
	  var mediaUploader;
	
	  $('.buttonupload').click(function(e) {
	    e.preventDefault();
	    var role=$(this).attr('role');
	     	    // Extend the wp.media object
	    mediaUploader = wp.media.frames.file_frame = wp.media({
	      title: 'Выберите изображение',
	      button: {
	      text: 'Вставить'
	    }, multiple: false });
	
	    // When a file is selected, grab the URL and set it as the text field's value
	    mediaUploader.on('select', function() {
	      var attachment = mediaUploader.state().get('selection').first().toJSON();
	      //$('#image-url').val(attachment.url);
	      $('#image-url'+role).val(attachment.id);
	      $('#upli'+role).html( '<img src="'+attachment.url+'" alt="" style="height: 100px; width: auto; margin: 10px 0"/>' );
	      
	
	      
	    });
	    // Open the uploader dialog
	    mediaUploader.open();
	  });
	  $('.delete').click(function(e) {
	  e.preventDefault();
	  var role=$(this).attr('role');	
	  if (confirm("Изображение будет удалено. Изменения вступят в силу после сохранения")) {
		  
	  $('#image-url'+role).val('');
	  $('#upli'+role).html('');	  
		  
		  
		  
	  } else {
	  		return false;
	  	} 
	  
	  
	    
	  });
});	