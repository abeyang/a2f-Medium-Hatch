# Blueprints for the posts overview page

title: posts overview page
pages: true
	template: post
	sort: flip
	limit: 10
files: false
fields:
	title:
		label: title
		type: text
		help: The title of the posts overview page.
		required: true    
	description:
		label: description
		type: textarea
		size: small
		help: The description of the posts overview page.
		required: true
