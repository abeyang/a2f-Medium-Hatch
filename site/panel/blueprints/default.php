<?php if(!defined('KIRBY')) exit ?>

# Blueprints for the homepage
# TODO: some way to insert top banner images here

title: Info
pages: false
files: false
fields:
	title:
		label: title
		type: text
		help: Title of page to appear in the sidebar
		required: true   
	description:
		label: description
		type: textarea
		size: small
		help: Blurb that appears on your homepage, right underneath the header
		buttons: 
			- bold
			- italic
			- link
	news_label:
		label: news label
		type: text
		help: Label for the news/upcoming/featured section
		required: true
	posts_label:
		label: posts label
		type: text
		help: Label for the posts/recap/past events section
		required: true