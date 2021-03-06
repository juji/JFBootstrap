JFBootstrap
===========

JFbootstrap = ([Jasny Bootstrap](http://jasny.github.com/bootstrap/) - icon -  iconic) + [FontAwesome](http://fortawesome.github.com/Font-Awesome/> 3.0) + additional plugins

Not intended for release, use it at your own risk.
Questions on wiki, however, will be answered.

bug report and patches are welcome

see demo: <http://jfbootstrap.jujiyangasli.com/>


## aditional plugins

### Drag n drop grid plugin

<b>html</b> (auto)
```html

<div id="someparent" class="dnd-grid">
	<div class="dnd-gridcell" style="width:100px;height:100px;"></div>
	<div class="dnd-gridcell" style="width:100px;height:100px;"></div>
	...
	<div class="dnd-gridcell" style="width:100px;height:100px;"></div>
	<div class="dnd-gridcell" style="width:100px;height:100px;"></div>
</div>
```

<b>javascript</b> (if you want to)

```javascript

	$('.dnd-gridcell').dndgrid();
```


<b>other usage</b>
```html

<div id="someparent" class="dnd-grid">
	<div class="dnd-gridcell" style="width:100px;height:100px;">
		<img src=".." class="img_trigger" />
	</div>
</div>
<script>
	
	//mousedown on .img_trigger will move .dnd-gridcell
	$('.dnd-gridcell').dndgrid({'trigger':'.img_trigger'});
	
</script>
```


### Drag n drop upload plugin


<b>html</b> (auto)
```html
<div id="droparea" 
	class="dnd-upload" 
	title="[ Drop images here to upload ]" 
	data-uploadurl="uploadimage.php" 
	data-allowed="image/png,image/jpeg,image/jpg,image/gif"  
	style="display:inline-block;width:700px;height:500px;">
	<div class="dnd-fallback well">
		<!-- fallback content here -->
		<input type="file" />
	</div>
	<div class="dnd-content well" style="">
		<div class="dnd-select-file">
			<span type="button" class="btn btn-primary btn-file">
				Select files
				<input type="file" class="dnd-file-input" multiple />
			</span>
		</div>
		<div class="dnd-content-exists">
			<a class="dnd-delete" href="javascript:void(0);">&times;</a>
			<div class="dnd-image">
				<img src="http://www.placehold.it/150X150/EFEFEF/AAAAAA&text=uploading" 
				class="img-polaroid" />
			</div>
			<div class="dnd-progress progress">
				<div class="dnd-progress-number bar"></div>
			</div>
		</div>
	</div>
</div>
```


<b>javascript</b> (if you must)

```javascript


	$('.dnd-upload').dndupload({
		
		'uploadurl': 'somefile.php', 		//required
		'allowed': ['image/jpeg','image/png'], 	//optional, default [] (all accepted)
		'uploadAsync': true, 			//optional, default true
		'multiple': true 			//optional, default true
		
	}).on('dropped',function( jQEvent, dndDropEvent, dndInstance ){
		
		//this event start after ReadFile is done
		
		//you can access files dropped by:
		var filesDropped = dndInstance.files;
		
		//each file contains:
		for(var i in filesDropped){
			var name = filesDropped[i].name;
			var id = filesDropped[i].id;
			var type = filesDropped[i].type;
			var size = filesDropped[i].size;
			
			//javascript Date object
			var modifiedDate = filesDropped[i].lastModifiedDate;
			
			//data of file: 
			//base 64 for image/*, 
			//text for text/*, 
			//binary for anything else
			var data = filesDropped[i].data;
		}
		
		//do this to automagically start dndgrid
		//or else, the grid will be activated on $(document).click();
		$('.dnd-content-exists').dndgrid();
		
	}).on('uploadprogress',function( jQEvent, dndDropEvent, percentUploaded, file, dndInstance ){
		
		//you can do something like
		$('#'+file.id+' .dnd-progress-number').css('width',percentUploaded+'%');
		
	}).on('uploaderror',function(jQEvent, serverMessage, file, dndInstance){
		
		doErrorFunction();
		
	}).on('uploadsuccess',function(jQEvent, serverMessage, file, dndInstance){
		
		//check for status
		if(serverMessage.status) doSuccessFunction();
		else doErrorFunction();
	});

```
