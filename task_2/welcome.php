<!doctype html>
<link rel="stylesheet" href="stylesheet.css">
<head><title>DETAIL PRODUK</title></head>
	<body>
		<div class='center-title'>
	<?php
$name=$_GET["name"];
echo "Halo, $name";?>
		</div>
		<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="https://www.gia.edu/images/polished-aquamarine-gem.png" /></div>
                        </div>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">Batu Aquamarine</h3>
						<p class="product-description">Aquamarine adalah varian dari Beril,
							dengan warna biru pucat hingga hijau muda. Batu ini cukup berlimpah di alam namun sekarang sudah semakin jarang ditemui karena sudah banyak ditambang.
						Detail dari <a href='https://en.wikipedia.org/wiki/Aquamarine_(gem)'> Wikipedia </a> </p> 
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>