<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/jf-bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="js/jf-bootstrap.min.js"></script>
	</head>
	<body style="padding:34px;">
		<h2>JFBootstrap <small>examples</small></h2>
		<p><i class="icon-remove"></i></p>
		<p>JFbootstrap = (Jasny Bootstrap - icon - iconic) + FontAwesome + additional plugins</p>
		<p><a target="_blank"href="https://github.com/juji/JFBootstrap">View on Github</a></p>
		<p>&nbsp;</p>
		<div>
			<h4>Dnd grid <small>Arrange the boxes</small></h4>
			<div class="dnd-grid" style="width:250px;height:150px;">
				<div class="dnd-gridcell" style="margin:3px;width:50px;height:50px;background-color:green;"></div>
				<div class="dnd-gridcell" style="margin:3px;width:50px;height:50px;background-color:yellow;"></div>
				<div class="dnd-gridcell" style="margin:3px;width:50px;height:50px;background-color:red;"></div>
				<div class="dnd-gridcell" style="margin:3px;width:50px;height:50px;background-color:blue;"></div>
				<div class="dnd-gridcell" style="margin:3px;width:50px;height:50px;background-color:grey;"></div>
				<div class="dnd-gridcell" style="margin:3px;width:50px;height:50px;background-color:black;"></div>
				<div class="dnd-gridcell" style="margin:3px;width:50px;height:50px;background-color:gold;"></div>
				<div class="dnd-gridcell" style="margin:3px;width:50px;height:50px;background-color:orange;"></div>
				<div class="clearfix"></div>
			</div>
			
			<h4>Dnd upload <small>Try dragging some files</small></h4>
			<div id="droparea" 
				class="dnd-upload" 
				title="[ Drop files here to upload ]" 
				data-uploadurl="uploadimage.php" 
				style="display:inline-block;width:700px;height:300px;">
				<div class="dnd-fallback well">
					<!-- fallback content here -->
					<input type="file" />
					<div style="margin-top:13px;">If you see this, that means your browser doesn't support drang n drop, XhrUpload or FileReader</div>
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
		</div>
		<h4>Dnd upload (jpg only) <small>Try dragging some images</small></h4>
			<div id="droparea" 
				class="dnd-upload" 
				title="[ Drop .jpg here to upload ]" 
				data-allowed="image/jpg,image/jpeg"
				data-uploadurl="uploadimage.php" 
				style="display:inline-block;width:700px;height:300px;">
				<div class="dnd-fallback well">
					<!-- fallback content here -->
					<input type="file" />
					<div style="margin-top:13px;">If you see this, that means your browser doesn't support drang n drop, XhrUpload or FileReader</div>
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
		</div>
	</body>
</html>