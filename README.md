JFBootstrap
===========

JFbootstrap = (Jasny Bootstrap - icon -  iconic) + (FontAwesome) + additional plugins

Not intended for release, use it at your own risk.
Questions on wiki, however, will be answered.

bug report and patches are welcome


<b>aditional plugins</b>

Drag n drop sortable plugin


Drag n drop upload plugin
```html
<div id="droparea" class="dnd-upload" title="[ Drop images here to upload ]" 
data-uploadurl="api/hotel/uploadimage/" 
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
