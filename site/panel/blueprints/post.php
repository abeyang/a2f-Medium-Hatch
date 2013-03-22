# Blueprints for an post

title: post
pages: false
files: true
fields:
	title:
		label: title
		type: text
		help: The title of your post.
		required: true    
	description:
		label: description
		type: textarea
		size: small
		help: Short description of your post.
		required: true
	published:
		label: published
		type: date
		format: mm/dd/yy
		required: true
	text:
		label: your content
		type: textarea
		size: large
		help: Your content.
		required: true
		buttons: 
			- h1
			- h2
			- h3
			- bold
			- italic
			- email
			- link
	tags:
		label: tags
		type: text
		help: Your Tags (Tag One, Tag Two, Tag 3).
		required: true
