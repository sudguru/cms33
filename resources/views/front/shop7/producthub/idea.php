<?php
1. Set a SPECIAL "hub" class to all links pointing to "product-hub View";

2. Event Listner for ".hub" class

//Operation #1 - layoutjs.blade.php
	Check if localstorage "products" exists 
		TRUE 	
			Check if expired // 1 HOUR EXIPIRATION
				TRUE 	
					1. Get PRODUCTS from server 
					2. Save it to localstorage
					3. set expiration time of 1 hour.
				FALSE
		FALSE
			1. Get PRODUCTS from server 
			2. Save it to localstorage
			3. set expiration time of 1 hour.			

3. Continue to "product-hub" view with confidence that there is data in localstorage

4. In Product Hub Page 
	Read "products" from localstorage
	Create HTML
	Assign it to list.js


	productdata
	[
		{
			id : 1,
			name: "Door",
			........
			brandname: "ddd",
			materialtype: "xxx"
			prices: [
				{
					id: 3
					p_id :1
					color_id:
					size_id:
					from:
					to:
					retular:
					discounted:
				},.....
			],
			colors: [
				{
					id
					name:
					...
				},...
			],
			sizes: [
				{
					id:
					size:
					...
				}, ...
			],
			images: [],
			categories:[]


		}.......
	]