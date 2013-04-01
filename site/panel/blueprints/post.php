# Blueprints for a post (recap)

title: post
pages: false
files: true
fields:
	title:
		label: Title
		type: text
		required: true    
	published:
		label: Published
		type: date
		format: yy-mm-dd
		required: true
	thumbnail:
		label: Thumbnail URL
		type: text
		help: eg, http://farm9.staticflickr.com/8529/8561716508_a22bed1031_z.jpg
	text:
		label: content
		type: textarea
		size: large
		required: true
		buttons: 
			- h2
			- h3
			- bold
			- italic
			- email
			- link
<<<<<<< HEAD
			- event
=======
	gallery_url:
		label: Flickr Gallery URL
		type: text
		help: eg, http://www.flickr.com/photos/gracepointriverside/sets/72157633007483678/
>>>>>>> 38ee66c54465eedfa6f5a81ae08af939deb81069
	tags:
		label: Tags
		type: tags 
		help: Tag video, photos, signup
		data:
		  - video
		  - photos
		  - signup

