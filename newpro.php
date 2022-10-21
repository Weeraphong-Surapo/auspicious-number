<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<html>

<style>
	@import url(font-awesome.min.css);
	@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic");


	/*
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

	/* Reset */

	html,
	body,
	div,
	span,
	applet,
	object,
	iframe,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	p,
	blockquote,
	pre,
	a,
	abbr,
	acronym,
	address,
	big,
	cite,
	code,
	del,
	dfn,
	em,
	img,
	ins,
	kbd,
	q,
	s,
	samp,
	small,
	strike,
	strong,
	sub,
	sup,
	tt,
	var,
	b,
	u,
	i,
	center,
	dl,
	dt,
	dd,
	ol,
	ul,
	li,
	fieldset,
	form,
	label,
	legend,
	table,
	caption,
	tbody,
	tfoot,
	thead,
	tr,
	th,
	td,
	article,
	aside,
	canvas,
	details,
	embed,
	figure,
	figcaption,
	footer,
	header,
	hgroup,
	menu,
	nav,
	output,
	ruby,
	section,
	summary,
	time,
	mark,
	audio,
	video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;

	}

	article,
	aside,
	details,
	figcaption,
	figure,
	footer,
	header,
	hgroup,
	menu,
	nav,
	section {
		display: block;
	}

	body {
		line-height: 1;
	}

	ol,
	ul {
		list-style: none;
	}

	blockquote,
	q {
		quotes: none;
	}

	blockquote:before,
	blockquote:after,
	q:before,
	q:after {
		content: '';
		content: none;
	}

	table {
		border-collapse: collapse;
		border-spacing: 0;
	}

	body {
		-webkit-text-size-adjust: none;
	}

	/* Box Model */

	*,
	*:before,
	*:after {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	/* Grid */

	.row {
		border-bottom: solid 1px transparent;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row>* {
		float: left;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row:after,
	.row:before {
		content: '';
		display: block;
		clear: both;
		height: 0;
	}

	.row.uniform>*> :first-child {
		margin-top: 0;
	}

	.row.uniform>*> :last-child {
		margin-bottom: 0;
	}

	.row.\30 \25>* {
		padding: 0 0 0 0em;
	}

	.row.\30 \25 {
		margin: 0 0 -1px 0em;
	}

	.row.uniform.\30 \25>* {
		padding: 0em 0 0 0em;
	}

	.row.uniform.\30 \25 {
		margin: 0em 0 -1px 0em;
	}

	.row>* {
		padding: 0 0 0 1.5em;
	}

	.row {
		margin: 0 0 -1px -1.5em;
	}

	.row.uniform>* {
		padding: 1.5em 0 0 1.5em;
	}

	.row.uniform {
		margin: -1.5em 0 -1px -1.5em;
	}

	.row.\32 00\25>* {
		padding: 0 0 0 3em;
	}

	.row.\32 00\25 {
		margin: 0 0 -1px -3em;
	}

	.row.uniform.\32 00\25>* {
		padding: 3em 0 0 3em;
	}

	.row.uniform.\32 00\25 {
		margin: -3em 0 -1px -3em;
	}

	.row.\31 50\25>* {
		padding: 0 0 0 2.25em;
	}

	.row.\31 50\25 {
		margin: 0 0 -1px -2.25em;
	}

	.row.uniform.\31 50\25>* {
		padding: 2.25em 0 0 2.25em;
	}

	.row.uniform.\31 50\25 {
		margin: -2.25em 0 -1px -2.25em;
	}

	.row.\35 0\25>* {
		padding: 0 0 0 0.75em;
	}

	.row.\35 0\25 {
		margin: 0 0 -1px -0.75em;
	}

	.row.uniform.\35 0\25>* {
		padding: 0.75em 0 0 0.75em;
	}

	.row.uniform.\35 0\25 {
		margin: -0.75em 0 -1px -0.75em;
	}

	.row.\32 5\25>* {
		padding: 0 0 0 0.375em;
	}

	.row.\32 5\25 {
		margin: 0 0 -1px -0.375em;
	}

	.row.uniform.\32 5\25>* {
		padding: 0.375em 0 0 0.375em;
	}

	.row.uniform.\32 5\25 {
		margin: -0.375em 0 -1px -0.375em;
	}

	.\31 2u,
	.\31 2u\24 {
		width: 100%;
		clear: none;
		margin-left: 0;
	}

	.\31 1u,
	.\31 1u\24 {
		width: 91.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 0u,
	.\31 0u\24 {
		width: 83.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\39 u,
	.\39 u\24 {
		width: 75%;
		clear: none;
		margin-left: 0;
	}

	.\38 u,
	.\38 u\24 {
		width: 66.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\37 u,
	.\37 u\24 {
		width: 58.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\36 u,
	.\36 u\24 {
		width: 50%;
		clear: none;
		margin-left: 0;
	}

	.\35 u,
	.\35 u\24 {
		width: 41.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\34 u,
	.\34 u\24 {
		width: 33.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\33 u,
	.\33 u\24 {
		width: 25%;
		clear: none;
		margin-left: 0;
	}

	.\32 u,
	.\32 u\24 {
		width: 16.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 u,
	.\31 u\24 {
		width: 8.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\31 2u\24+*,
	.\31 1u\24+*,
	.\31 0u\24+*,
	.\39 u\24+*,
	.\38 u\24+*,
	.\37 u\24+*,
	.\36 u\24+*,
	.\35 u\24+*,
	.\34 u\24+*,
	.\33 u\24+*,
	.\32 u\24+*,
	.\31 u\24+* {
		clear: left;
	}

	.\-11u {
		margin-left: 91.66667%;
	}

	.\-10u {
		margin-left: 83.33333%;
	}

	.\-9u {
		margin-left: 75%;
	}

	.\-8u {
		margin-left: 66.66667%;
	}

	.\-7u {
		margin-left: 58.33333%;
	}

	.\-6u {
		margin-left: 50%;
	}

	.\-5u {
		margin-left: 41.66667%;
	}

	.\-4u {
		margin-left: 33.33333%;
	}

	.\-3u {
		margin-left: 25%;
	}

	.\-2u {
		margin-left: 16.66667%;
	}

	.\-1u {
		margin-left: 8.33333%;
	}

	@media screen and (max-width: 1680px) {

		.row>* {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform>* {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25>* {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25>* {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25>* {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25>* {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25>* {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25>* {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25>* {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25>* {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28xlarge\29,
		.\31 2u\24\28xlarge\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xlarge\29,
		.\31 1u\24\28xlarge\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xlarge\29,
		.\31 0u\24\28xlarge\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xlarge\29,
		.\39 u\24\28xlarge\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xlarge\29,
		.\38 u\24\28xlarge\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xlarge\29,
		.\37 u\24\28xlarge\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xlarge\29,
		.\36 u\24\28xlarge\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xlarge\29,
		.\35 u\24\28xlarge\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xlarge\29,
		.\34 u\24\28xlarge\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xlarge\29,
		.\33 u\24\28xlarge\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xlarge\29,
		.\32 u\24\28xlarge\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xlarge\29,
		.\31 u\24\28xlarge\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xlarge\29+*,
		.\31 1u\24\28xlarge\29+*,
		.\31 0u\24\28xlarge\29+*,
		.\39 u\24\28xlarge\29+*,
		.\38 u\24\28xlarge\29+*,
		.\37 u\24\28xlarge\29+*,
		.\36 u\24\28xlarge\29+*,
		.\35 u\24\28xlarge\29+*,
		.\34 u\24\28xlarge\29+*,
		.\33 u\24\28xlarge\29+*,
		.\32 u\24\28xlarge\29+*,
		.\31 u\24\28xlarge\29+* {
			clear: left;
		}

		.\-11u\28xlarge\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xlarge\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xlarge\29 {
			margin-left: 75%;
		}

		.\-8u\28xlarge\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xlarge\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xlarge\29 {
			margin-left: 50%;
		}

		.\-5u\28xlarge\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xlarge\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xlarge\29 {
			margin-left: 25%;
		}

		.\-2u\28xlarge\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xlarge\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 1280px) {

		.row>* {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform>* {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25>* {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25>* {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25>* {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25>* {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25>* {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25>* {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25>* {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25>* {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28large\29,
		.\31 2u\24\28large\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28large\29,
		.\31 1u\24\28large\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28large\29,
		.\31 0u\24\28large\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28large\29,
		.\39 u\24\28large\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28large\29,
		.\38 u\24\28large\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28large\29,
		.\37 u\24\28large\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28large\29,
		.\36 u\24\28large\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28large\29,
		.\35 u\24\28large\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28large\29,
		.\34 u\24\28large\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28large\29,
		.\33 u\24\28large\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28large\29,
		.\32 u\24\28large\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28large\29,
		.\31 u\24\28large\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28large\29+*,
		.\31 1u\24\28large\29+*,
		.\31 0u\24\28large\29+*,
		.\39 u\24\28large\29+*,
		.\38 u\24\28large\29+*,
		.\37 u\24\28large\29+*,
		.\36 u\24\28large\29+*,
		.\35 u\24\28large\29+*,
		.\34 u\24\28large\29+*,
		.\33 u\24\28large\29+*,
		.\32 u\24\28large\29+*,
		.\31 u\24\28large\29+* {
			clear: left;
		}

		.\-11u\28large\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28large\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28large\29 {
			margin-left: 75%;
		}

		.\-8u\28large\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28large\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28large\29 {
			margin-left: 50%;
		}

		.\-5u\28large\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28large\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28large\29 {
			margin-left: 25%;
		}

		.\-2u\28large\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28large\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 980px) {

		.row>* {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform>* {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25>* {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25>* {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25>* {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25>* {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25>* {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25>* {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25>* {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25>* {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28medium\29,
		.\31 2u\24\28medium\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28medium\29,
		.\31 1u\24\28medium\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28medium\29,
		.\31 0u\24\28medium\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28medium\29,
		.\39 u\24\28medium\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28medium\29,
		.\38 u\24\28medium\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28medium\29,
		.\37 u\24\28medium\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28medium\29,
		.\36 u\24\28medium\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28medium\29,
		.\35 u\24\28medium\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28medium\29,
		.\34 u\24\28medium\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28medium\29,
		.\33 u\24\28medium\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28medium\29,
		.\32 u\24\28medium\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28medium\29,
		.\31 u\24\28medium\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28medium\29+*,
		.\31 1u\24\28medium\29+*,
		.\31 0u\24\28medium\29+*,
		.\39 u\24\28medium\29+*,
		.\38 u\24\28medium\29+*,
		.\37 u\24\28medium\29+*,
		.\36 u\24\28medium\29+*,
		.\35 u\24\28medium\29+*,
		.\34 u\24\28medium\29+*,
		.\33 u\24\28medium\29+*,
		.\32 u\24\28medium\29+*,
		.\31 u\24\28medium\29+* {
			clear: left;
		}

		.\-11u\28medium\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28medium\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28medium\29 {
			margin-left: 75%;
		}

		.\-8u\28medium\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28medium\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28medium\29 {
			margin-left: 50%;
		}

		.\-5u\28medium\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28medium\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28medium\29 {
			margin-left: 25%;
		}

		.\-2u\28medium\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28medium\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 736px) {

		.row>* {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform>* {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25>* {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25>* {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25>* {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25>* {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25>* {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25>* {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25>* {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25>* {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28small\29,
		.\31 2u\24\28small\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28small\29,
		.\31 1u\24\28small\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28small\29,
		.\31 0u\24\28small\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28small\29,
		.\39 u\24\28small\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28small\29,
		.\38 u\24\28small\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28small\29,
		.\37 u\24\28small\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28small\29,
		.\36 u\24\28small\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28small\29,
		.\35 u\24\28small\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28small\29,
		.\34 u\24\28small\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28small\29,
		.\33 u\24\28small\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28small\29,
		.\32 u\24\28small\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28small\29,
		.\31 u\24\28small\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28small\29+*,
		.\31 1u\24\28small\29+*,
		.\31 0u\24\28small\29+*,
		.\39 u\24\28small\29+*,
		.\38 u\24\28small\29+*,
		.\37 u\24\28small\29+*,
		.\36 u\24\28small\29+*,
		.\35 u\24\28small\29+*,
		.\34 u\24\28small\29+*,
		.\33 u\24\28small\29+*,
		.\32 u\24\28small\29+*,
		.\31 u\24\28small\29+* {
			clear: left;
		}

		.\-11u\28small\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28small\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28small\29 {
			margin-left: 75%;
		}

		.\-8u\28small\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28small\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28small\29 {
			margin-left: 50%;
		}

		.\-5u\28small\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28small\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28small\29 {
			margin-left: 25%;
		}

		.\-2u\28small\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28small\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 480px) {

		.row>* {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform>* {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25>* {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25>* {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25>* {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25>* {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25>* {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25>* {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25>* {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25>* {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28xsmall\29,
		.\31 2u\24\28xsmall\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xsmall\29,
		.\31 1u\24\28xsmall\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xsmall\29,
		.\31 0u\24\28xsmall\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xsmall\29,
		.\39 u\24\28xsmall\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xsmall\29,
		.\38 u\24\28xsmall\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xsmall\29,
		.\37 u\24\28xsmall\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xsmall\29,
		.\36 u\24\28xsmall\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xsmall\29,
		.\35 u\24\28xsmall\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xsmall\29,
		.\34 u\24\28xsmall\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xsmall\29,
		.\33 u\24\28xsmall\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xsmall\29,
		.\32 u\24\28xsmall\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xsmall\29,
		.\31 u\24\28xsmall\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xsmall\29+*,
		.\31 1u\24\28xsmall\29+*,
		.\31 0u\24\28xsmall\29+*,
		.\39 u\24\28xsmall\29+*,
		.\38 u\24\28xsmall\29+*,
		.\37 u\24\28xsmall\29+*,
		.\36 u\24\28xsmall\29+*,
		.\35 u\24\28xsmall\29+*,
		.\34 u\24\28xsmall\29+*,
		.\33 u\24\28xsmall\29+*,
		.\32 u\24\28xsmall\29+*,
		.\31 u\24\28xsmall\29+* {
			clear: left;
		}

		.\-11u\28xsmall\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xsmall\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xsmall\29 {
			margin-left: 75%;
		}

		.\-8u\28xsmall\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xsmall\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xsmall\29 {
			margin-left: 50%;
		}

		.\-5u\28xsmall\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xsmall\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xsmall\29 {
			margin-left: 25%;
		}

		.\-2u\28xsmall\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xsmall\29 {
			margin-left: 8.33333%;
		}

	}

	/* Basic */

	@-ms-viewport {
		width: device-width;
	}

	body {
		background: #2e3842;
	}

	body.is-loading *,
	body.is-loading *:before,
	body.is-loading *:after {
		-moz-animation: none !important;
		-webkit-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
		-moz-transition: none !important;
		-webkit-transition: none !important;
		-ms-transition: none !important;
		transition: none !important;
	}

	body,
	input,
	select,
	textarea {
		color: #fff;
		font-family: "Open Sans", Helvetica, sans-serif;
		font-size: 15pt;
		font-weight: 400;
		letter-spacing: 0.075em;
		line-height: 1.65em;
	}

	@media screen and (max-width: 1680px) {

		body,
		input,
		select,
		textarea {
			font-size: 13pt;
		}

	}

	@media screen and (max-width: 1280px) {

		body,
		input,
		select,
		textarea {
			font-size: 12pt;
		}

	}

	@media screen and (max-width: 736px) {

		body,
		input,
		select,
		textarea {
			font-size: 11pt;
			letter-spacing: 0.0375em;
		}

	}

	a {
		-moz-transition: color 0.2s ease, border-bottom-color 0.2s ease;
		-webkit-transition: color 0.2s ease, border-bottom-color 0.2s ease;
		-ms-transition: color 0.2s ease, border-bottom-color 0.2s ease;
		transition: color 0.2s ease, border-bottom-color 0.2s ease;
		border-bottom: dotted 1px;
		color: inherit;
		text-decoration: none;
	}

	a:hover {
		border-bottom-color: transparent;
	}

	strong,
	b {
		color: #fff;
		font-weight: 600;
	}

	em,
	i {
		font-style: italic;
	}

	p {
		margin: 0 0 2em 0;
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		color: #fff;
		font-weight: 800;
		letter-spacing: 0.225em;
		line-height: 1em;
		margin: 0 0 1em 0;
		text-transform: uppercase;
	}

	h1 a,
	h2 a,
	h3 a,
	h4 a,
	h5 a,
	h6 a {
		color: inherit;
		text-decoration: none;
	}

	h2 {
		font-size: 1.35em;
		line-height: 1.75em;
	}

	@media screen and (max-width: 736px) {

		h2 {
			font-size: 1.1em;
			line-height: 1.65em;
		}

	}

	h3 {
		font-size: 1.15em;
		line-height: 1.75em;
	}

	@media screen and (max-width: 736px) {

		h3 {
			font-size: 1em;
			line-height: 1.65em;
		}

	}

	h4 {
		font-size: 1em;
		line-height: 1.5em;
	}

	h5 {
		font-size: 0.8em;
		line-height: 1.5em;
	}

	h6 {
		font-size: 0.7em;
		line-height: 1.5em;
	}

	sub {
		font-size: 0.8em;
		position: relative;
		top: 0.5em;
	}

	sup {
		font-size: 0.8em;
		position: relative;
		top: -0.5em;
	}

	hr {
		border: 0;
		border-bottom: solid 2px #fff;
		margin: 3em 0;
	}

	hr.major {
		margin: 4.5em 0;
	}

	blockquote {
		border-left: solid 4px #fff;
		font-style: italic;
		margin: 0 0 2em 0;
		padding: 0.5em 0 0.5em 2em;
	}

	code {
		background: rgba(144, 144, 144, 0.25);
		border-radius: 3px;
		font-family: "Courier New", monospace;
		font-size: 0.9em;
		letter-spacing: 0;
		margin: 0 0.25em;
		padding: 0.25em 0.65em;
	}

	pre {
		-webkit-overflow-scrolling: touch;
		font-family: "Courier New", monospace;
		font-size: 0.9em;
		margin: 0 0 2em 0;
	}

	pre code {
		display: block;
		line-height: 1.75em;
		padding: 1em 1.5em;
		overflow-x: auto;
	}

	.align-left {
		text-align: left;
	}

	.align-center {
		text-align: center;
	}

	.align-right {
		text-align: right;
	}

	/* Section/Article */

	section.special,
	article.special {
		text-align: center;
	}

	header p {
		color: rgba(255, 255, 255, 0.5);
		position: relative;
		top: -0.25em;
	}

	header h3+p {
		font-size: 1.1em;
	}

	header h4+p,
	header h5+p,
	header h6+p {
		font-size: 0.9em;
	}

	header.major {
		margin: 0 0 3.5em 0;
	}

	header.major h2,
	header.major h3,
	header.major h4,
	header.major h5,
	header.major h6 {
		border-bottom: solid 2px #fff;
		display: inline-block;
		padding-bottom: 1em;
		position: relative;
	}

	header.major h2:after,
	header.major h3:after,
	header.major h4:after,
	header.major h5:after,
	header.major h6:after {
		content: '';
		display: block;
		height: 1px;
	}

	header.major p {
		color: #fff;
		top: 0;
	}

	@media screen and (max-width: 736px) {

		header.major {
			margin: 0 0 2em 0;
		}

	}

	@media screen and (max-width: 980px) {

		header br {
			display: none;
		}

	}

	/* Form */

	form {
		margin: 0 0 2em 0;
	}

	label {
		color: #fff;
		display: block;
		font-size: 0.9em;
		font-weight: 600;
		margin: 0 0 1em 0;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		background: rgba(144, 144, 144, 0.25);
		border-radius: 3px;
		border: none;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1em;
		text-decoration: none;
		width: 100%;
	}

	input[type="text"]:invalid,
	input[type="password"]:invalid,
	input[type="email"]:invalid,
	select:invalid,
	textarea:invalid {
		box-shadow: none;
	}

	input[type="text"]:focus,
	input[type="password"]:focus,
	input[type="email"]:focus,
	select:focus,
	textarea:focus {
		box-shadow: 0 0 0 2px #21b2a6;
	}

	.select-wrapper {
		text-decoration: none;
		display: block;
		position: relative;
	}

	.select-wrapper:before {
		-moz-osx-font-smoothing: grayscale;
		-webkit-font-smoothing: antialiased;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		text-transform: none !important;
	}

	.select-wrapper:before {
		-moz-pointer-events: none;
		-webkit-pointer-events: none;
		-ms-pointer-events: none;
		pointer-events: none;
		color: #fff;
		content: '\f078';
		display: block;
		height: 2.75em;
		line-height: 2.75em;
		position: absolute;
		right: 0;
		text-align: center;
		top: 0;
		width: 2.75em;
	}

	.select-wrapper select::-ms-expand {
		display: none;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select {
		height: 2.75em;
	}

	textarea {
		padding: 0.75em 1em;
	}

	input[type="checkbox"],
	input[type="radio"] {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		display: block;
		float: left;
		margin-right: -2em;
		opacity: 0;
		width: 1em;
		z-index: -1;
	}

	input[type="checkbox"]+label,
	input[type="radio"]+label {
		text-decoration: none;
		color: #fff;
		cursor: pointer;
		display: inline-block;
		font-size: 1em;
		font-weight: 400;
		padding-left: 2.4em;
		padding-right: 0.75em;
		position: relative;
	}

	input[type="checkbox"]+label:before,
	input[type="radio"]+label:before {
		-moz-osx-font-smoothing: grayscale;
		-webkit-font-smoothing: antialiased;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		text-transform: none !important;
	}

	input[type="checkbox"]+label:before,
	input[type="radio"]+label:before {
		background: rgba(144, 144, 144, 0.25);
		border-radius: 3px;
		content: '';
		display: inline-block;
		height: 1.65em;
		left: 0;
		line-height: 1.58125em;
		position: absolute;
		text-align: center;
		top: 0;
		width: 1.65em;
	}

	input[type="checkbox"]:checked+label:before,
	input[type="radio"]:checked+label:before {
		background: #2e3842;
		color: #fff;
		content: '\f00c';
	}

	input[type="checkbox"]:focus+label:before,
	input[type="radio"]:focus+label:before {
		box-shadow: 0 0 0 2px #21b2a6;
	}

	input[type="checkbox"]+label:before {
		border-radius: 3px;
	}

	input[type="radio"]+label:before {
		border-radius: 100%;
	}

	::-webkit-input-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	:-moz-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	::-moz-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	:-ms-input-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	.formerize-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	/* Box */

	.box {
		border-radius: 3px;
		border: solid 2px #fff;
		margin-bottom: 2em;
		padding: 1.5em;
	}

	.box> :last-child,
	.box> :last-child> :last-child,
	.box> :last-child> :last-child> :last-child {
		margin-bottom: 0;
	}

	.box.alt {
		border: 0;
		border-radius: 0;
		padding: 0;
	}

	/* Icon */

	.icon {
		text-decoration: none;
		border-bottom: none;
		position: relative;
	}

	.icon:before {
		-moz-osx-font-smoothing: grayscale;
		-webkit-font-smoothing: antialiased;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		text-transform: none !important;
	}

	.icon>.label {
		display: none;
	}

	.icon.major {
		-moz-transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		-ms-transform: rotate(-45deg);
		transform: rotate(-45deg);
		border-radius: 3px;
		border: solid 2px #fff;
		display: inline-block;
		font-size: 1.35em;
		height: calc(3em + 2px);
		line-height: 3em;
		text-align: center;
		width: calc(3em + 2px);
	}

	.icon.major:before {
		-moz-transform: rotate(45deg);
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
		display: inline-block;
		font-size: 1.5em;
	}

	@media screen and (max-width: 736px) {

		.icon.major {
			font-size: 1em;
		}

	}

	.icon.style1 {
		color: #00ffcc;
	}

	.icon.style2 {
		color: #00f0ff;
	}

	.icon.style3 {
		color: #76ddff;
	}

	/* Image */

	.image {
		border-radius: 3px;
		border: 0;
		display: inline-block;
		position: relative;
	}

	.image img {
		border-radius: 3px;
		display: block;
	}

	.image.left {
		float: left;
		margin: 0 2em 2em 0;
		top: 0.25em;
	}

	.image.right {
		float: right;
		margin: 0 0 2em 2em;
		top: 0.25em;
	}

	.image.left,
	.image.right {
		max-width: 40%;
	}

	.image.left img,
	.image.right img {
		width: 100%;
	}

	.image.fit {
		display: block;
		margin: 0 0 2em 0;
		width: 100%;
	}

	.image.fit img {
		width: 100%;
	}

	/* List */

	ol {
		list-style: decimal;
		margin: 0 0 2em 0;
		padding-left: 1.25em;
	}

	ol li {
		padding-left: 0.25em;
	}

	ul {
		list-style: disc;
		margin: 0 0 2em 0;
		padding-left: 1em;
	}

	ul li {
		padding-left: 0.5em;
	}

	ul.alt {
		list-style: none;
		padding-left: 0;
	}

	ul.alt li {
		border-top: solid 1px #fff;
		padding: 0.5em 0;
	}

	ul.alt li:first-child {
		border-top: 0;
		padding-top: 0;
	}

	ul.icons {
		cursor: default;
		list-style: none;
		padding-left: 0;
	}

	ul.icons li {
		display: inline-block;
		padding: 0 1em 0 0;
	}

	ul.icons li:last-child {
		padding-right: 0 !important;
	}

	ul.icons.major {
		padding: 1em 0;
	}

	ul.icons.major li {
		padding-right: 3.5em;
	}

	@media screen and (max-width: 736px) {

		ul.icons.major li {
			padding: 0 1em !important;
		}

	}

	ul.actions {
		cursor: default;
		list-style: none;
		padding-left: 0;
	}

	ul.actions li {
		display: inline-block;
		padding: 0 1.5em 0 0;
		vertical-align: middle;
	}

	ul.actions li:last-child {
		padding-right: 0;
	}

	ul.actions.small li {
		padding: 0 0.75em 0 0;
	}

	ul.actions.vertical li {
		display: block;
		padding: 1.5em 0 0 0;
	}

	ul.actions.vertical li:first-child {
		padding-top: 0;
	}

	ul.actions.vertical li>* {
		margin-bottom: 0;
	}

	ul.actions.vertical.small li {
		padding: 0.75em 0 0 0;
	}

	ul.actions.vertical.small li:first-child {
		padding-top: 0;
	}

	ul.actions.fit {
		display: table;
		margin-left: -1.5em;
		padding: 0;
		table-layout: fixed;
		width: calc(100% + 1.5em);
	}

	ul.actions.fit li {
		display: table-cell;
		padding: 0 0 0 1.5em;
	}

	ul.actions.fit li>* {
		margin-bottom: 0;
	}

	ul.actions.fit.small {
		margin-left: -0.75em;
		width: calc(100% + 0.75em);
	}

	ul.actions.fit.small li {
		padding: 0 0 0 0.75em;
	}

	@media screen and (max-width: 736px) {

		ul.actions li {
			display: block;
			padding: 1em 0 0 0;
			text-align: center;
			width: 100%;
		}

		ul.actions li:first-child {
			padding-top: 0;
		}

		ul.actions li>* {
			margin: 0 auto !important;
			max-width: 30em;
			width: 100%;
		}

		ul.actions li>*.icon:before {
			margin-left: -1em;
		}

		ul.actions.small li {
			padding: 0.5em 0 0 0;
		}

		ul.actions.small li:first-child {
			padding-top: 0;
		}

	}

	dl {
		margin: 0 0 2em 0;
	}

	/* Table */

	.table-wrapper {
		-webkit-overflow-scrolling: touch;
		overflow-x: auto;
	}

	table {
		margin: 0 0 2em 0;
		width: 100%;
	}

	table tbody tr {
		border: solid 1px #fff;
		border-left: 0;
		border-right: 0;
	}

	table tbody tr:nth-child(2n + 1) {
		background-color: rgba(144, 144, 144, 0.25);
	}

	table td {
		padding: 0.75em 0.75em;
	}

	table th {
		color: #fff;
		font-size: 0.9em;
		font-weight: 600;
		padding: 0 0.75em 0.75em 0.75em;
		text-align: left;
	}

	table thead {
		border-bottom: solid 2px #fff;
	}

	table tfoot {
		border-top: solid 2px #fff;
	}

	table.alt {
		border-collapse: separate;
	}

	table.alt tbody tr td {
		border: solid 1px #fff;
		border-left-width: 0;
		border-top-width: 0;
	}

	table.alt tbody tr td:first-child {
		border-left-width: 1px;
	}

	table.alt tbody tr:first-child td {
		border-top-width: 1px;
	}

	table.alt thead {
		border-bottom: 0;
	}

	table.alt tfoot {
		border-top: 0;
	}

	/* Button */

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	button,
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		background-color: transparent;
		border-radius: 3px;
		border: 0;
		box-shadow: inset 0 0 0 2px #fff;
		color: #fff;
		cursor: pointer;
		display: inline-block;
		font-size: 0.8em;
		font-weight: 600;
		height: 3.125em;
		letter-spacing: 0.225em;
		line-height: 3.125em;
		padding: 0 2.75em;
		text-align: center;
		text-decoration: none;
		text-transform: uppercase;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}

	input[type="submit"]:hover,
	input[type="reset"]:hover,
	input[type="button"]:hover,
	button:hover,
	.button:hover {
		background-color: rgba(144, 144, 144, 0.25);
	}

	input[type="submit"]:active,
	input[type="reset"]:active,
	input[type="button"]:active,
	button:active,
	.button:active {
		background-color: rgba(144, 144, 144, 0.5);
	}

	input[type="submit"].icon:before,
	input[type="reset"].icon:before,
	input[type="button"].icon:before,
	button.icon:before,
	.button.icon:before {
		margin-right: 0.5em;
	}

	input[type="submit"].fit,
	input[type="reset"].fit,
	input[type="button"].fit,
	button.fit,
	.button.fit {
		display: block;
		margin: 0 0 1em 0;
		width: 100%;
	}

	input[type="submit"].small,
	input[type="reset"].small,
	input[type="button"].small,
	button.small,
	.button.small {
		font-size: 0.8em;
	}

	input[type="submit"].big,
	input[type="reset"].big,
	input[type="button"].big,
	button.big,
	.button.big {
		font-size: 1.35em;
	}

	input[type="submit"].special,
	input[type="reset"].special,
	input[type="button"].special,
	button.special,
	.button.special {
		background-color: #ed4933;
		box-shadow: none !important;
		color: #ffffff !important;
	}

	input[type="submit"].special:hover,
	input[type="reset"].special:hover,
	input[type="button"].special:hover,
	button.special:hover,
	.button.special:hover {
		background-color: #ef5e4a !important;
	}

	input[type="submit"].special:active,
	input[type="reset"].special:active,
	input[type="button"].special:active,
	button.special:active,
	.button.special:active {
		background-color: #eb341c !important;
	}

	input[type="submit"].disabled,
	input[type="submit"]:disabled,
	input[type="reset"].disabled,
	input[type="reset"]:disabled,
	input[type="button"].disabled,
	input[type="button"]:disabled,
	button.disabled,
	button:disabled,
	.button.disabled,
	.button:disabled {
		-moz-pointer-events: none;
		-webkit-pointer-events: none;
		-ms-pointer-events: none;
		pointer-events: none;
		opacity: 0.25;
	}

	@media screen and (max-width: 736px) {

		input[type="submit"],
		input[type="reset"],
		input[type="button"],
		button,
		.button {
			height: 3.75em;
			line-height: 3.75em;
		}

	}

	/* Features */

	.features {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-moz-justify-content: center;
		-webkit-justify-content: center;
		-ms-justify-content: center;
		justify-content: center;
		list-style: none;
		padding: 0;
		width: 100%;
	}

	.features li {
		padding: 4em 4em 2em 6em;
		display: block;
		position: relative;
		text-align: left;
		width: 50%;
	}

	.features li:nth-child(1) {
		background-color: rgba(0, 0, 0, 0.035);
	}

	.features li:nth-child(2) {
		background-color: rgba(0, 0, 0, 0.07);
	}

	.features li:nth-child(3) {
		background-color: rgba(0, 0, 0, 0.105);
	}

	.features li:nth-child(4) {
		background-color: rgba(0, 0, 0, 0.14);
	}

	.features li:nth-child(5) {
		background-color: rgba(0, 0, 0, 0.175);
	}

	.features li:nth-child(6) {
		background-color: rgba(0, 0, 0, 0.21);
	}

	.features li:nth-child(7) {
		background-color: rgba(0, 0, 0, 0.245);
	}

	.features li:nth-child(8) {
		background-color: rgba(0, 0, 0, 0.28);
	}

	.features li:nth-child(9) {
		background-color: rgba(0, 0, 0, 0.315);
	}

	.features li:nth-child(10) {
		background-color: rgba(0, 0, 0, 0.35);
	}

	.features li:before {
		display: block;
		color: #00ffcc;
		position: absolute;
		left: 1.75em;
		top: 2.75em;
		font-size: 1.5em;
	}

	.features li:nth-child(1) {
		border-top-left-radius: 3px;
	}

	.features li:nth-child(2) {
		border-top-right-radius: 3px;
	}

	.features li:nth-last-child(1) {
		border-bottom-right-radius: 3px;
	}

	.features li:nth-last-child(2) {
		border-bottom-left-radius: 3px;
	}

	@media screen and (max-width: 980px) {

		.features li {
			padding: 3em 2em 1em 2em;
			text-align: center;
		}

		.features li:before {
			left: 0;
			margin: 0 0 1em 0;
			position: relative;
			top: 0;
		}

	}

	@media screen and (max-width: 736px) {

		.features li {
			padding: 3em 0 1em 0;
			background-color: transparent !important;
			border-top: solid 2px #fff;
			width: 100%;
		}

		.features li:first-child {
			border-top: 0;
		}

	}

	/* Spotlight */

	.spotlight {
		-moz-align-items: center;
		-webkit-align-items: center;
		-ms-align-items: center;
		align-items: center;
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
	}

	.spotlight .image {
		-moz-order: 1;
		-webkit-order: 1;
		-ms-order: 1;
		order: 1;
		border-radius: 0;
		width: 40%;
	}

	.spotlight .image img {
		border-radius: 0;
		width: 100%;
	}

	.spotlight .content {
		padding: 2em 4em 0.1em 4em;
		-moz-order: 2;
		-webkit-order: 2;
		-ms-order: 2;
		order: 2;
		max-width: 48em;
		width: 60%;
	}

	.spotlight:nth-child(2n) {
		-moz-flex-direction: row-reverse;
		-webkit-flex-direction: row-reverse;
		-ms-flex-direction: row-reverse;
		flex-direction: row-reverse;
	}

	.spotlight:nth-child(1) {
		background-color: rgba(0, 0, 0, 0.075);
	}

	.spotlight:nth-child(2) {
		background-color: rgba(0, 0, 0, 0.15);
	}

	.spotlight:nth-child(3) {
		background-color: rgba(0, 0, 0, 0.225);
	}

	.spotlight:nth-child(4) {
		background-color: rgba(0, 0, 0, 0.3);
	}

	.spotlight:nth-child(5) {
		background-color: rgba(0, 0, 0, 0.375);
	}

	.spotlight:nth-child(6) {
		background-color: rgba(0, 0, 0, 0.45);
	}

	.spotlight:nth-child(7) {
		background-color: rgba(0, 0, 0, 0.525);
	}

	.spotlight:nth-child(8) {
		background-color: rgba(0, 0, 0, 0.6);
	}

	.spotlight:nth-child(9) {
		background-color: rgba(0, 0, 0, 0.675);
	}

	.spotlight:nth-child(10) {
		background-color: rgba(0, 0, 0, 0.75);
	}

	@media screen and (max-width: 1280px) {

		.spotlight .image {
			width: 45%;
		}

		.spotlight .content {
			width: 55%;
		}

	}

	@media screen and (max-width: 980px) {

		.spotlight {
			display: block;
		}

		.spotlight br {
			display: none;
		}

		.spotlight .image {
			width: 100%;
		}

		.spotlight .content {
			padding: 4em 3em 2em 3em;
			max-width: none;
			text-align: center;
			width: 100%;
		}

	}

	@media screen and (max-width: 736px) {

		.spotlight .content {
			padding: 3em 2em 1em 2em;
		}

	}

	/* Wrapper */

	.wrapper {
		padding: 6em 0 4em 0;
	}

	.wrapper>.inner {
		width: 60em;
		margin: 0 auto;
	}

	@media screen and (max-width: 1280px) {

		.wrapper>.inner {
			width: 90%;
		}

	}

	@media screen and (max-width: 980px) {

		.wrapper>.inner {
			width: 100%;
		}

	}

	.wrapper.alt {
		padding: 0;
	}

	.wrapper.style1 {
		background-color: #21b2a6;
		color: #c7ebe8;
	}

	.wrapper.style1 strong,
	.wrapper.style1 b {
		color: #ffffff;
	}

	.wrapper.style1 h2,
	.wrapper.style1 h3,
	.wrapper.style1 h4,
	.wrapper.style1 h5,
	.wrapper.style1 h6 {
		color: #ffffff;
	}

	.wrapper.style1 hr {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style1 blockquote {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style1 code {
		background: rgba(255, 255, 255, 0.075);
	}

	.wrapper.style1 header p {
		color: #a6e0db;
	}

	.wrapper.style1 header.major h2,
	.wrapper.style1 header.major h3,
	.wrapper.style1 header.major h4,
	.wrapper.style1 header.major h5,
	.wrapper.style1 header.major h6 {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style1 header.major p {
		color: #c7ebe8;
	}

	.wrapper.style1 label {
		color: #ffffff;
	}

	.wrapper.style1 input[type="text"],
	.wrapper.style1 input[type="password"],
	.wrapper.style1 input[type="email"],
	.wrapper.style1 select,
	.wrapper.style1 textarea {
		background: rgba(255, 255, 255, 0.075);
	}

	.wrapper.style1 .select-wrapper:before {
		color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style1 input[type="checkbox"]+label,
	.wrapper.style1 input[type="radio"]+label {
		color: #c7ebe8;
	}

	.wrapper.style1 input[type="checkbox"]+label:before,
	.wrapper.style1 input[type="radio"]+label:before {
		background: rgba(255, 255, 255, 0.075);
	}

	.wrapper.style1 input[type="checkbox"]:checked+label:before,
	.wrapper.style1 input[type="radio"]:checked+label:before {
		background: #ffffff;
		color: #21b2a6;
	}

	.wrapper.style1 ::-webkit-input-placeholder {
		color: #a6e0db !important;
	}

	.wrapper.style1 :-moz-placeholder {
		color: #a6e0db !important;
	}

	.wrapper.style1 ::-moz-placeholder {
		color: #a6e0db !important;
	}

	.wrapper.style1 :-ms-input-placeholder {
		color: #a6e0db !important;
	}

	.wrapper.style1 .formerize-placeholder {
		color: #a6e0db !important;
	}

	.wrapper.style1 .icon.major {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style1 ul.alt li {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style1 table tbody tr {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style1 table tbody tr:nth-child(2n + 1) {
		background-color: rgba(255, 255, 255, 0.075);
	}

	.wrapper.style1 table th {
		color: #ffffff;
	}

	.wrapper.style1 table thead {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style1 table tfoot {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style1 table.alt tbody tr td {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style1 input[type="submit"],
	.wrapper.style1 input[type="reset"],
	.wrapper.style1 input[type="button"],
	.wrapper.style1 button,
	.wrapper.style1 .button {
		box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.125);
		color: #ffffff;
	}

	.wrapper.style1 input[type="submit"]:hover,
	.wrapper.style1 input[type="reset"]:hover,
	.wrapper.style1 input[type="button"]:hover,
	.wrapper.style1 button:hover,
	.wrapper.style1 .button:hover {
		background-color: rgba(255, 255, 255, 0.075);
	}

	.wrapper.style1 input[type="submit"]:active,
	.wrapper.style1 input[type="reset"]:active,
	.wrapper.style1 input[type="button"]:active,
	.wrapper.style1 button:active,
	.wrapper.style1 .button:active {
		background-color: rgba(255, 255, 255, 0.2);
	}

	@media screen and (max-width: 736px) {

		.wrapper.style1 .features li {
			border-top-color: rgba(0, 0, 0, 0.125);
		}

	}

	.wrapper.style2 {
		background-color: #2e3842;
	}

	.wrapper.style3 {
		background-color: #505393;
		color: #d3d4e4;
	}

	.wrapper.style3 strong,
	.wrapper.style3 b {
		color: #ffffff;
	}

	.wrapper.style3 h2,
	.wrapper.style3 h3,
	.wrapper.style3 h4,
	.wrapper.style3 h5,
	.wrapper.style3 h6 {
		color: #ffffff;
	}

	.wrapper.style3 hr {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style3 blockquote {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style3 code {
		background: rgba(255, 255, 255, 0.075);
	}

	.wrapper.style3 header p {
		color: #b9bad3;
	}

	.wrapper.style3 header.major h2,
	.wrapper.style3 header.major h3,
	.wrapper.style3 header.major h4,
	.wrapper.style3 header.major h5,
	.wrapper.style3 header.major h6 {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style3 header.major p {
		color: #d3d4e4;
	}

	.wrapper.style3 label {
		color: #ffffff;
	}

	.wrapper.style3 input[type="text"],
	.wrapper.style3 input[type="password"],
	.wrapper.style3 input[type="email"],
	.wrapper.style3 select,
	.wrapper.style3 textarea {
		background: rgba(255, 255, 255, 0.075);
	}

	.wrapper.style3 .select-wrapper:before {
		color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style3 input[type="checkbox"]+label,
	.wrapper.style3 input[type="radio"]+label {
		color: #d3d4e4;
	}

	.wrapper.style3 input[type="checkbox"]+label:before,
	.wrapper.style3 input[type="radio"]+label:before {
		background: rgba(255, 255, 255, 0.075);
	}

	.wrapper.style3 input[type="checkbox"]:checked+label:before,
	.wrapper.style3 input[type="radio"]:checked+label:before {
		background: #ffffff;
		color: #505393;
	}

	.wrapper.style3 ::-webkit-input-placeholder {
		color: #b9bad3 !important;
	}

	.wrapper.style3 :-moz-placeholder {
		color: #b9bad3 !important;
	}

	.wrapper.style3 ::-moz-placeholder {
		color: #b9bad3 !important;
	}

	.wrapper.style3 :-ms-input-placeholder {
		color: #b9bad3 !important;
	}

	.wrapper.style3 .formerize-placeholder {
		color: #b9bad3 !important;
	}

	.wrapper.style3 .icon.major {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style3 ul.alt li {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style3 table tbody tr {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style3 table tbody tr:nth-child(2n + 1) {
		background-color: rgba(255, 255, 255, 0.075);
	}

	.wrapper.style3 table th {
		color: #ffffff;
	}

	.wrapper.style3 table thead {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style3 table tfoot {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style3 table.alt tbody tr td {
		border-color: rgba(0, 0, 0, 0.125);
	}

	.wrapper.style3 input[type="submit"],
	.wrapper.style3 input[type="reset"],
	.wrapper.style3 input[type="button"],
	.wrapper.style3 button,
	.wrapper.style3 .button {
		box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.125);
		color: #ffffff;
	}

	.wrapper.style3 input[type="submit"]:hover,
	.wrapper.style3 input[type="reset"]:hover,
	.wrapper.style3 input[type="button"]:hover,
	.wrapper.style3 button:hover,
	.wrapper.style3 .button:hover {
		background-color: rgba(255, 255, 255, 0.075);
	}

	.wrapper.style3 input[type="submit"]:active,
	.wrapper.style3 input[type="reset"]:active,
	.wrapper.style3 input[type="button"]:active,
	.wrapper.style3 button:active,
	.wrapper.style3 .button:active {
		background-color: rgba(255, 255, 255, 0.2);
	}

	@media screen and (max-width: 736px) {

		.wrapper.style3 .features li {
			border-top-color: rgba(0, 0, 0, 0.125);
		}

	}

	.wrapper.style4 {
		background-color: transparent;
	}

	.wrapper.style5 {
		background-color: #ffffff;
		color: #4E4852;
	}

	.wrapper.style5 strong,
	.wrapper.style5 b {
		color: #2E3842;
	}

	.wrapper.style5 h2,
	.wrapper.style5 h3,
	.wrapper.style5 h4,
	.wrapper.style5 h5,
	.wrapper.style5 h6 {
		color: #2E3842;
	}

	.wrapper.style5 hr {
		border-color: #dfdfdf;
	}

	.wrapper.style5 blockquote {
		border-color: #dfdfdf;
	}

	.wrapper.style5 code {
		background: rgba(0, 0, 0, 0.0375);
	}

	.wrapper.style5 header p {
		color: #8E8892;
	}

	.wrapper.style5 header.major h2,
	.wrapper.style5 header.major h3,
	.wrapper.style5 header.major h4,
	.wrapper.style5 header.major h5,
	.wrapper.style5 header.major h6 {
		border-color: #dfdfdf;
	}

	.wrapper.style5 header.major p {
		color: #4E4852;
	}

	.wrapper.style5 label {
		color: #2E3842;
	}

	.wrapper.style5 input[type="text"],
	.wrapper.style5 input[type="password"],
	.wrapper.style5 input[type="email"],
	.wrapper.style5 select,
	.wrapper.style5 textarea {
		background: rgba(0, 0, 0, 0.0375);
	}

	.wrapper.style5 .select-wrapper:before {
		color: #dfdfdf;
	}

	.wrapper.style5 input[type="checkbox"]+label,
	.wrapper.style5 input[type="radio"]+label {
		color: #4E4852;
	}

	.wrapper.style5 input[type="checkbox"]+label:before,
	.wrapper.style5 input[type="radio"]+label:before {
		background: rgba(0, 0, 0, 0.0375);
	}

	.wrapper.style5 input[type="checkbox"]:checked+label:before,
	.wrapper.style5 input[type="radio"]:checked+label:before {
		background: #2E3842;
		color: #ffffff;
	}

	.wrapper.style5 ::-webkit-input-placeholder {
		color: #8E8892 !important;
	}

	.wrapper.style5 :-moz-placeholder {
		color: #8E8892 !important;
	}

	.wrapper.style5 ::-moz-placeholder {
		color: #8E8892 !important;
	}

	.wrapper.style5 :-ms-input-placeholder {
		color: #8E8892 !important;
	}

	.wrapper.style5 .formerize-placeholder {
		color: #8E8892 !important;
	}

	.wrapper.style5 .icon.major {
		border-color: #dfdfdf;
	}

	.wrapper.style5 ul.alt li {
		border-color: #dfdfdf;
	}

	.wrapper.style5 table tbody tr {
		border-color: #dfdfdf;
	}

	.wrapper.style5 table tbody tr:nth-child(2n + 1) {
		background-color: rgba(0, 0, 0, 0.0375);
	}

	.wrapper.style5 table th {
		color: #2E3842;
	}

	.wrapper.style5 table thead {
		border-color: #dfdfdf;
	}

	.wrapper.style5 table tfoot {
		border-color: #dfdfdf;
	}

	.wrapper.style5 table.alt tbody tr td {
		border-color: #dfdfdf;
	}

	.wrapper.style5 input[type="submit"],
	.wrapper.style5 input[type="reset"],
	.wrapper.style5 input[type="button"],
	.wrapper.style5 button,
	.wrapper.style5 .button {
		box-shadow: inset 0 0 0 2px #dfdfdf;
		color: #2E3842;
	}

	.wrapper.style5 input[type="submit"]:hover,
	.wrapper.style5 input[type="reset"]:hover,
	.wrapper.style5 input[type="button"]:hover,
	.wrapper.style5 button:hover,
	.wrapper.style5 .button:hover {
		background-color: rgba(0, 0, 0, 0.0375);
	}

	.wrapper.style5 input[type="submit"]:active,
	.wrapper.style5 input[type="reset"]:active,
	.wrapper.style5 input[type="button"]:active,
	.wrapper.style5 button:active,
	.wrapper.style5 .button:active {
		background-color: rgba(0, 0, 0, 0.1);
	}

	@media screen and (max-width: 736px) {

		.wrapper.style5 .features li {
			border-top-color: #dfdfdf;
		}

	}

	@media screen and (max-width: 980px) {

		.wrapper {
			padding: 4em 3em 2em 3em;
		}

	}

	@media screen and (max-width: 736px) {

		.wrapper {
			padding: 3em 2em 1em 2em;
		}

	}

	/* Page Wrapper + Menu */

	#page-wrapper {
		-moz-transition: opacity 0.5s ease;
		-webkit-transition: opacity 0.5s ease;
		-ms-transition: opacity 0.5s ease;
		transition: opacity 0.5s ease;
		opacity: 1;
		padding-top: 3em;
	}

	#page-wrapper:before {
		background: transparent;
		content: '';
		display: block;
		display: none;
		height: 100%;
		left: 0;
		position: fixed;
		top: 0;
		width: 100%;
		z-index: 10001;
	}

	#menu {
		-moz-transform: translateX(20em);
		-webkit-transform: translateX(20em);
		-ms-transform: translateX(20em);
		transform: translateX(20em);
		-moz-transition: -moz-transform 0.5s ease;
		-webkit-transition: -webkit-transform 0.5s ease;
		-ms-transition: -ms-transform 0.5s ease;
		transition: transform 0.5s ease;
		-webkit-overflow-scrolling: touch;
		background: #21b2a6;
		color: #ffffff;
		height: 100%;
		max-width: 80%;
		overflow-y: auto;
		padding: 3em 2em;
		position: fixed;
		right: 0;
		top: 0;
		width: 20em;
		z-index: 10002;
	}

	#menu ul {
		list-style: none;
		padding: 0;
	}

	#menu ul>li {
		border-top: solid 1px rgba(0, 0, 0, 0.125);
		margin: 0.5em 0 0 0;
		padding: 0.5em 0 0 0;
	}

	#menu ul>li:first-child {
		border-top: 0 !important;
		margin-top: 0 !important;
		padding-top: 0 !important;
	}

	#menu ul>li>a {
		border: 0;
		color: inherit;
		display: block;
		font-size: 0.8em;
		letter-spacing: 0.225em;
		outline: 0;
		text-decoration: none;
		text-transform: uppercase;
	}

	@media screen and (max-width: 736px) {

		#menu ul>li>a {
			line-height: 3em;
		}

	}

	#menu .close {
		background-image: url("images/close.svg");
		background-position: 4.85em 1em;
		background-repeat: no-repeat;
		border: 0;
		cursor: pointer;
		display: block;
		height: 3em;
		position: absolute;
		right: 0;
		top: 0;
		vertical-align: middle;
		width: 7em;
	}

	@media screen and (max-width: 736px) {

		#menu {
			padding: 3em 1.5em;
		}

	}

	body.is-menu-visible #page-wrapper {
		opacity: 0.35;
	}

	body.is-menu-visible #page-wrapper:before {
		display: block;
	}

	body.is-menu-visible #menu {
		-moz-transform: translateX(0);
		-webkit-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	}

	/* Header */

	#header {
		-moz-transition: background-color 0.2s ease;
		-webkit-transition: background-color 0.2s ease;
		-ms-transition: background-color 0.2s ease;
		transition: background-color 0.2s ease;
		background: #2e3842;
		height: 3em;
		left: 0;
		line-height: 3em;
		position: fixed;
		top: 0;
		width: 100%;
		z-index: 10000;
	}

	#header h1 {
		-moz-transition: opacity 0.2s ease;
		-webkit-transition: opacity 0.2s ease;
		-ms-transition: opacity 0.2s ease;
		transition: opacity 0.2s ease;
		height: inherit;
		left: 1.25em;
		line-height: inherit;
		position: absolute;
		top: 0;
	}

	#header h1 a {
		border: 0;
		display: block;
		height: inherit;
		line-height: inherit;
	}

	@media screen and (max-width: 736px) {

		#header h1 a {
			font-size: 0.8em;
		}

	}

	#header nav {
		height: inherit;
		line-height: inherit;
		position: absolute;
		right: 0;
		top: 0;
	}

	#header nav>ul {
		list-style: none;
		margin: 0;
		padding: 0;
		white-space: nowrap;
	}

	#header nav>ul>li {
		display: inline-block;
		padding: 0;
	}

	#header nav>ul>li>a {
		border: 0;
		color: #fff;
		display: block;
		font-size: 0.8em;
		letter-spacing: 0.225em;
		padding: 0 1.5em;
		text-transform: uppercase;
	}

	#header nav>ul>li>a.menuToggle {
		outline: 0;
		position: relative;
	}

	#header nav>ul>li>a.menuToggle:after {
		background-image: url("images/bars.svg");
		background-position: right center;
		background-repeat: no-repeat;
		content: '';
		display: inline-block;
		height: 3.75em;
		vertical-align: top;
		width: 2em;
	}

	@media screen and (max-width: 736px) {

		#header nav>ul>li>a.menuToggle {
			padding: 0 1.5em;
		}

		#header nav>ul>li>a.menuToggle span {
			display: none;
		}

	}

	@media screen and (max-width: 736px) {

		#header nav>ul>li>a {
			padding: 0 0 0 1.5em;
		}

	}

	#header nav>ul>li:first-child {
		margin-left: 0;
	}

	#header.alt {
		background: transparent;
	}

	#header.alt h1 {
		-moz-pointer-events: none;
		-webkit-pointer-events: none;
		-ms-pointer-events: none;
		pointer-events: none;
		opacity: 0;
	}

	/* Banner */

	#banner {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-direction: column;
		-webkit-flex-direction: column;
		-ms-flex-direction: column;
		flex-direction: column;
		-moz-justify-content: center;
		-webkit-justify-content: center;
		-ms-justify-content: center;
		justify-content: center;
		cursor: default;
		height: 100vh;
		min-height: 35em;
		overflow: hidden;
		position: relative;
		text-align: center;
	}

	#banner h2 {
		-moz-transform: scale(1);
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
		-moz-transition: -moz-transform 0.5s ease, opacity 0.5s ease;
		-webkit-transition: -webkit-transform 0.5s ease, opacity 0.5s ease;
		-ms-transition: -ms-transform 0.5s ease, opacity 0.5s ease;
		transition: transform 0.5s ease, opacity 0.5s ease;
		display: inline-block;
		font-size: 1.75em;
		opacity: 1;
		padding: 0.35em 1em;
		position: relative;
		z-index: 1;
	}

	#banner h2:before,
	#banner h2:after {
		-moz-transition: width 0.85s ease;
		-webkit-transition: width 0.85s ease;
		-ms-transition: width 0.85s ease;
		transition: width 0.85s ease;
		-moz-transition-delay: 0.25s;
		-webkit-transition-delay: 0.25s;
		-ms-transition-delay: 0.25s;
		transition-delay: 0.25s;
		background: #fff;
		content: '';
		display: block;
		height: 2px;
		position: absolute;
		width: 100%;
	}

	#banner h2:before {
		top: 0;
		left: 0;
	}

	#banner h2:after {
		bottom: 0;
		right: 0;
	}

	#banner p {
		letter-spacing: 0.225em;
		text-transform: uppercase;
	}

	#banner p a {
		color: inherit;
	}

	#banner .more {
		-moz-transition: -moz-transform 0.75s ease, opacity 0.75s ease;
		-webkit-transition: -webkit-transform 0.75s ease, opacity 0.75s ease;
		-ms-transition: -ms-transform 0.75s ease, opacity 0.75s ease;
		transition: transform 0.75s ease, opacity 0.75s ease;
		-moz-transition-delay: 3.5s;
		-webkit-transition-delay: 3.5s;
		-ms-transition-delay: 3.5s;
		transition-delay: 3.5s;
		-moz-transform: translateY(0);
		-webkit-transform: translateY(0);
		-ms-transform: translateY(0);
		transform: translateY(0);
		border: none;
		bottom: 0;
		color: inherit;
		font-size: 0.8em;
		height: 8.5em;
		left: 50%;
		letter-spacing: 0.225em;
		margin-left: -8.5em;
		opacity: 1;
		outline: 0;
		padding-left: 0.225em;
		position: absolute;
		text-align: center;
		text-transform: uppercase;
		width: 16em;
		z-index: 1;
	}

	#banner .more:after {
		background-image: url("images/arrow.svg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: contain;
		bottom: 4em;
		content: '';
		display: block;
		height: 1.5em;
		left: 50%;
		margin: 0 0 0 -0.75em;
		position: absolute;
		width: 1.5em;
	}

	#banner:after {
		-moz-pointer-events: none;
		-webkit-pointer-events: none;
		-ms-pointer-events: none;
		pointer-events: none;
		-moz-transition: opacity 3s ease-in-out;
		-webkit-transition: opacity 3s ease-in-out;
		-ms-transition: opacity 3s ease-in-out;
		transition: opacity 3s ease-in-out;
		-moz-transition-delay: 1.25s;
		-webkit-transition-delay: 1.25s;
		-ms-transition-delay: 1.25s;
		transition-delay: 1.25s;
		content: '';
		background: #2e3842;
		display: block;
		width: 100%;
		height: 100%;
		position: absolute;
		left: 0;
		top: 0;
		opacity: 0;
	}

	@media screen and (max-width: 736px) {

		#banner {
			padding: 7em 3em 5em 3em;
			height: auto;
			min-height: 0;
		}

		#banner h2 {
			font-size: 1.25em;
		}

		#banner br {
			display: none;
		}

		#banner .more {
			display: none;
		}

	}

	body.is-loading #banner h2 {
		-moz-transform: scale(0.95);
		-webkit-transform: scale(0.95);
		-ms-transform: scale(0.95);
		transform: scale(0.95);
		opacity: 0;
	}

	body.is-loading #banner h2:before,
	body.is-loading #banner h2:after {
		width: 0;
	}

	body.is-loading #banner .more {
		-moz-transform: translateY(8.5em);
		-webkit-transform: translateY(8.5em);
		-ms-transform: translateY(8.5em);
		transform: translateY(8.5em);
		opacity: 0;
	}

	body.is-loading #banner:after {
		opacity: 1;
	}

	/* CTA */

	#cta .inner {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		max-width: 45em;
	}

	#cta .inner header {
		-moz-order: 1;
		-webkit-order: 1;
		-ms-order: 1;
		order: 1;
		padding-right: 3em;
		width: 70%;
	}

	#cta .inner header p {
		color: inherit;
	}

	#cta .inner .actions {
		-moz-order: 2;
		-webkit-order: 2;
		-ms-order: 2;
		order: 2;
		width: 30%;
	}

	@media screen and (max-width: 980px) {

		#cta .inner {
			display: block;
			text-align: center;
		}

		#cta .inner header {
			padding-right: 0;
			width: 100%;
		}

		#cta .inner .actions {
			margin-left: auto;
			margin-right: auto;
			max-width: 20em;
			width: 100%;
		}

	}

	@media screen and (max-width: 736px) {

		#cta .inner .actions {
			max-width: none;
		}

	}

	/* Main */

	#main>header {
		padding: 12em 0 10em 0;
		background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-image: linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-attachment: fixed;
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
		text-align: center;
	}

	#main>header h2 {
		font-size: 1.75em;
		margin: 0 0 0.5em 0;
	}

	#main>header p {
		color: inherit;
		letter-spacing: 0.225em;
		text-transform: uppercase;
		top: 0;
	}

	#main>header p a {
		color: inherit;
	}

	@media screen and (max-width: 1680px) {

		#main>header {
			padding: 10em 0 8em 0;
		}

	}

	@media screen and (max-width: 1280px) {

		#main>header {
			padding: 8em 3em 6em 3em;
		}

	}

	@media screen and (max-width: 980px) {

		#main>header {
			padding: 10em 3em 8em 3em;
		}

	}

	@media screen and (max-width: 736px) {

		#main>header {
			padding: 5em 3em 3em 3em;
		}

		#main>header h2 {
			font-size: 1.25em;
			margin: 0 0 1em 0;
		}

	}

	body.is-mobile #main>header {
		background-attachment: scroll;
	}

	/* Footer */

	#footer {
		padding: 6em 0 4em 0;
		background-color: #1d242a;
		text-align: center;
	}

	#footer .icons {
		font-size: 1.25em;
	}

	#footer .icons a {
		color: rgba(255, 255, 255, 0.5);
	}

	#footer .icons a:hover {
		color: #fff;
	}

	#footer .copyright {
		color: rgba(255, 255, 255, 0.5);
		font-size: 0.8em;
		letter-spacing: 0.225em;
		list-style: none;
		padding: 0;
		text-transform: uppercase;
	}

	#footer .copyright li {
		border-left: solid 1px rgba(255, 255, 255, 0.5);
		display: inline-block;
		line-height: 1em;
		margin-left: 1em;
		padding-left: 1em;
	}

	#footer .copyright li:first-child {
		border-left: 0;
		margin-left: 0;
		padding-left: 0;
	}

	#footer .copyright li a {
		color: inherit;
	}

	#footer .copyright li a:hover {
		color: #fff;
	}

	@media screen and (max-width: 480px) {

		#footer .copyright li {
			border: 0;
			display: block;
			line-height: 1.65em;
			margin: 0;
			padding: 0.5em 0;
		}

	}

	@media screen and (max-width: 980px) {

		#footer {
			padding: 4em 3em 2em 3em;
		}

	}

	@media screen and (max-width: 736px) {

		#footer {
			padding: 3em 2em 1em 2em;
		}

	}

	/* Landing */

	body.landing #page-wrapper {
		background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-image: linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-attachment: fixed;
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
		padding-top: 0;
	}

	body.landing #footer {
		background-color: rgba(29, 36, 42, 0.9);
	}

	body.is-mobile.landing #page-wrapper {
		background: none;
	}

	body.is-mobile.landing #banner,
	body.is-mobile.landing .wrapper.style4 {
		background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-image: linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../../images/banner.jpg");
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	body.is-mobile.landing #footer {
		background-color: #1d242a;
	}

	.circle {
		border: 10px solid transparent;
		background: linear-gradient(80deg, #fc4903, #fcdb03) border-box;
		-webkit-mask:
			linear-gradient(#fff 0 0);
		-webkit-mask-composite: destination-out;
		mask-composite: exclude;
		background-color: white;
		border-radius: 50%;
		height: 150px;
		width: 150px;
		position: relative;
		text-align: center;
		color: darkblue;
		display: flex;
		color: white;
		align-items: center;
		justify-content: center;
		background-color: white;
	}

	#my_div {

		position: relative;
		overflow: hidden;
	}

	#my_div img {
		max-width: 180px;
		height: 180px;
		border-radius: 50%;
		display: flex;
		justify-content: center;

	}

	#my_div h1 {
		font-size: 30px;
	}

	.card-box {
		min-width: 100%;
		margin-top: 8px;
		border-radius: 40px;
		position: relative;
		background-color: #d93223;
		display: flex;
		justify-content: center;
		align-items: center;
		/* height: 100%; */
	}

	.card-box h1 {
		margin-top: 17px;
		display: flex;
		justify-content: center;
		align-items: center;
	}
</style>

<head>
	<title>Ber likrit</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>
	<!-- Bootstrap core CSS -->
	<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

</head>

<body class="landing">

	<?php
	// นำเข้าไฟล์เพื่อเชื่อมต่อฐานข้อมูล

	include 'connect.php'; ?>
	<section id="banner">
		<div class="inner">
			<h2>Lucky Mongkol</h2>
			</ul>
		</div>

	</section>


	<?php

	// รับค่าตัวเลขมาจาก form ไฟล์ index.html

	$mobile_number = $_POST['mobile_number'];
	$check = $mobile_number[0] . $mobile_number[1];
	session_start();
	if ($check != '09' and $check != '08' and $check != '06') {
		echo "<script>window.location='index.php?mesg=กรุณาป้อนหมาเลขให้ถูกต้อง'</script>";
	} else {
		if ($mobile_number >= "1") {

			//  mysqli_query($conn, "INSERT INTO number (number) VALUES ('$mobile_number')")


			$str = $mobile_number;
			$arr1 = str_split($str);

			$num1 = $arr1[3] . $arr1[4];
			$num2 = $arr1[4] . $arr1[5];
			$num3 = $arr1[5] . $arr1[6];
			$num4 = $arr1[6] . $arr1[7];
			$num5 = $arr1[7] . $arr1[8];
			$num6 = $arr1[8] . $arr1[9];
			$num7 = $arr1[0] + $arr1[1] + $arr1[2] + $arr1[3] + $arr1[4] + $arr1[5] + $arr1[6] + $arr1[7] + $arr1[8] + $arr1[9];

			echo "<div class='container'>";







			$nums1 = $arr1[3] . $arr1[4];
			$nums2 = $arr1[4] . $arr1[5];
			$nums3 = $arr1[5] . $arr1[6];
			$nums4 = $arr1[6] . $arr1[7];
			$nums5 = $arr1[7] . $arr1[8];
			$nums6 = $arr1[8] . $arr1[9];


			$numa1 = $arr1[2] . $arr1[3] . $arr1[4];
			$numa2 = $arr1[3] . $arr1[4] . $arr1[5];
			$numa3 = $arr1[4] . $arr1[5] . $arr1[6];
			$numa4 = $arr1[5] . $arr1[6] . $arr1[7];
			$numa5 = $arr1[6] . $arr1[7] . $arr1[8];
			$numa6 = $arr1[7] . $arr1[8] . $arr1[9];


			//if (($numa1 == '289') || ($numa2 == '289') || ($numa3 == '289') || ($numa4 == '289') || ($numa5 == '289') || ($numa6 == '289'))   {
			// echo 'เบอร์มังกร' ;
			//} else {
			//echo 'none';
			//}
			//echo "<br/>";



			$element = '';
			$element_img = '';
			if (($numa1 == '289') || ($numa1 == '287') || ($numa1 == '282') || ($numa1 == '828') || ($numa1 == '829') || ($numa1 == '289') || ($numa2 == '289') || ($numa2 == '287') || ($numa2 == '282') || ($numa2 == '828') || ($numa2 == '829') || ($numa3 == '289') || ($numa3 == '287') || ($numa3 == '282') || ($numa3 == '828') || ($numa3 == '829') || ($numa4 == '289') || ($numa4 == '287') || ($numa4 == '282') || ($numa4 == '828') || ($numa4 == '829') || ($numa5 == '289') || ($numa5 == '287') || ($numa5 == '282') || ($numa5 == '828') || ($numa6 == '829' || ($numa6 == '289') || ($numa6 == '287') || ($numa6 == '282') || ($numa3 == '828') || ($numa3 == '829'))) {
				$element = 'เบอร์หงส์';
				$element_img = 'assets/element/หงษ์ทอง.jpeg';
			} else if (($numa1 == '789') || ($numa1 == '782') || ($numa1 == '879') || ($numa1 == '878') || ($numa1 == '987') || ($numa1 == '978') || ($numa2 == '789') || ($numa2 == '782') || ($numa2 == '879') || ($numa2 == '878') || ($numa2 == '987') || ($numa2 == '978') || ($numa3 == '789') || ($numa3 == '782') || ($numa3 == '879') || ($numa3 == '878') || ($numa3 == '987') || ($numa3 == '978') || ($numa4 == '789') || ($numa4 == '782') || ($numa4 == '879') || ($numa4 == '878') || ($numa4 == '987') || ($numa4 == '978') || ($numa5 == '789') || ($numa5 == '782') || ($numa5 == '879') || ($numa5 == '878') || ($numa5 == '987')  || ($numa6 == '789') || ($numa6 == '782') || ($numa6 == '879') || ($numa6 == '878') || ($numa6 == '987') || ($numa6 == '978')) {
				$element = 'เบอร์มังกร';
				$element_img = 'assets/element/มังกร.png';
			} else if (($numa1 == '639') || ($numa1 == '936') || ($numa2 == '936') || ($numa2 == '639') || ($numa3 == '639') || ($numa3 == '936') || ($numa4 == '639') || ($numa4 == '936') ||  ($numa5 == '639') || ($numa5 == '936') || ($numa6 == '639') || ($numa6 == '936')) {
				$element = 'เบอร์เทพเจ้ากวนอู';
				$element_img = 'assets/element/กวนอู.jpeg';
			} else {

				$element = '';
			}
			echo "<br/>";









			$gradea = array(25, 52, 47, 74, 71, 17);
			$gradeb = array(90, 58, 68, 77, 85, 86, '09');
			$gradec = array(00, 01, 02, 11, 12, 13, 18, 20, 21, 27, 30, 31, 33, 34, 37, 38, 40, 43, 48, 50, 57, 58, 60, 67, 70, 72, 73, 75, 76, 80, 81, 83, 84);
			$grad = '';
			$txt_grad = '';
			$score = '';
			if (in_array("$nums1", $gradec)) {
				$grad = "เกรด : C ";
				$txt_grad = "ควรเปลี่ยน<br>เกรด C";
				$score = '30/1000';
			} elseif (in_array("$nums2", $gradec)) {
				$grad = "เกรด : C ";
				$score = '30/1000';
				$txt_grad = "ควรเปลี่ยน<br>เกรด C";
			} elseif (in_array("$nums3", $gradec)) {
				$grad = "เกรด : C ";
				$txt_grad = "ควรเปลี่ยน<br>เกรด C";
				$score = '30/1000';
			} elseif (in_array("$nums4", $gradec)) {
				$grad = "เกรด : C ";
				$score = '30/1000';
				$txt_grad = "ควรเปลี่ยน<br>เกรด C";
			} elseif (in_array("$nums5", $gradec)) {
				$grad = "เกรด : C ";
				$score = '30/1000';
				$txt_grad = "ควรเปลี่ยน<br>เกรด C";
			} elseif (in_array("$nums6", $gradec)) {
				$grad = "เกรด : C ";
				$score = '30/1000';
				$txt_grad = "ควรเปลี่ยน<br>เกรด C";
			} elseif (in_array("$nums2", $gradea)) {
				$grad = "เกรด : A ";
				$score = '930/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด A";
			} elseif (in_array("$nums3", $gradea)) {
				$grad = "เกรด : A ";
				$score = '930/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด A";
			} elseif (in_array("$nums4", $gradea)) {
				$grad = "เกรด : A ";
				$score = '930/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด A";
			} elseif (in_array("$nums5", $gradea)) {
				$grad = "เกรด : A ";
				$score = '930/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด A";
			} elseif (in_array("$nums6", $gradea)) {
				$grad = "เกรด : A ";
				$score = '930/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด A";
			} elseif (in_array("$nums2", $gradeb)) {
				$grad = "เกรด : B ";
				$score = '480/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด B";
			} elseif (in_array("$nums3", $gradeb)) {
				$grad = "เกรด : B ";
				$score = '480/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด B";
			} elseif (in_array("$nums4", $gradeb)) {
				$grad = "เกรด : B ";
				$score = '480/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด B";
			} elseif (in_array("$nums5", $gradeb)) {
				$grad = "เกรด : B ";
				$score = '480/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด B";
			} elseif (in_array("$nums6", $gradeb)) {
				$grad = "เกรด : B ";
				$score = '480/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด B";
			} else {
				$grad = "เกรด : S+ ";
				$score = '999/1000';
				$txt_grad = "เบอร์ดีมาก<br>เกรด S+";
			}

			// ;






			// echo "<b>เบอร์ ".$str." </b><br>";
			//echo "ผลรวมเลขเบอร์นี้คือ :  <b>".$num7 ."</b>";
			echo "<hr>";


			$tat = $num7;
			$arr2 = str_split($tat);

			$total = $arr2[0] + $arr2[1];

			echo "<br/>";

			$energy = '';
			$img_energy = '';
			switch ($total) {
				case "1":
					$energy = "ธาตุไฟเสริมอำนาจ!";
					$img_energy = 'assets/element/fire.jpeg';
					break;
				case "2":
					$energy = "ธาตุสายน้ำ เสริม เสน่ห์!";
					$img_energy = 'assets/element/น้ำ.jpeg';
					break;
				case "3":
					$energy = "ธาตุไฟเพลิง เสริมเเข็งเเกร่ง!";
					$img_energy = 'assets/element/ไฟ.jpeg';
					break;
				case "4":
					$energy = "ธาตุต้นไม้ เสริมพลังบวก!";
					$img_energy = 'assets/element/ต้นไม้.jpeg';
					break;
				case "5":
					$energy = "ธาตุดินเสริมความสูรณ์!";
					$img_energy = 'assets/element/ดิน.png';
					break;
				case "6":
					$energy = "ธาตุน้ำลำธาร เสริมความสุข";
					$img_energy = 'assets/element/ลำ.jpeg';
					break;
				case "7":
					$energy = "ธาตุ ดินภูผา เสริม ความมุ่งมั่น!";
					$img_energy = 'assets/element/ดิน.jpeg';
					break;
				case "8":
					$energy = "ธาตุทอง เสริมบารมี!";
					$img_energy = 'assets/element/ทอง.jpeg';
					break;
				case "9":
					$energy = "ธาตุ ทองสว่าง เสริมสิ่งศักดิ์สิทธิ์!";
					$img_energy = 'assets/element/ทองสว่าง.png';
					break;
				default:
					$energy = "ไม่มีธาตุ";
					$img_energy = 'assets/element/sorry.jpeg';
			}

			// echo "<center>";
			// echo "<h2 class='alert alert-dark'>".$energy."</h2>";
			// echo '<img src="'.$img_energy.'" alt="" class="img-fluid w-25 h-25">';
			// echo "</center>";
			echo "<h2 class='alert alert-secondary text-center'>เบอร์มือถือ $mobile_number</h2>";
			echo "
					  <div class='row'>
					  	<div class='col-lg-12 col-md-12 col-sm-12 col-12  d-flex justify-content-center'>
					  	<center>
					  	<div id='my_div'>
					  	<img src='$element_img'>
					  	<h1>$element</h1>
					  </div>
					  </center>	
					  </div>
					  </div>
					  <div class='row'>
						  <div class='col-lg-6 col-md-12 col-sm-12 col-6  d-flex justify-content-center'>
							  <div class='circle'>" . "<h1>$score</h1>" . "</div>
						  </div>
						  <div class='col-lg-6 col-md-12 col-sm-12 col-6 d-flex justify-content-center'>
							  <div class='circle'" . "<h1>$txt_grad</h1>" . "</div>
						  </div>
					  </div>
					  <div class='row'>
						  <div class='col-lg-6 col-md-12 col-sm-12 col-6  d-flex justify-content-center'>
						<div class='card card-box'>
						<h1 class='text-white'>คะแนน $score</h1>
						</div>	  
						  </div>
						  <div class='col-lg-6 col-md-12 col-sm-12 col-6 d-flex justify-content-center'>
						  <div class='card card-box'>
						  <h1 class='text-white'>$txt_grad</h1>
						  </div>
						  </div>

					  </div>";

			echo "<br/>";
			echo "<hr>";
			echo "<br/>";














































			// เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 1     
			$sql = "SELECT * FROM `num-meaning` WHERE number='$num1'";
			$result = $conn->query($sql);




			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<br><center><b class='alert alert-secondary'>ความหมายเลขคู่ที่ 1 คือ: " . $row["number"] . "</b></center><p style='margin-top:30px;'>" . $row["meaning"] . "</p><br>";
				}
			} else {
				echo "0 results";
			}


			// เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 2    
			$sql = "SELECT * FROM `num-meaning` WHERE number='$num2'";
			$result = $conn->query($sql);


			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<br><center><b class='alert alert-secondary'> ความหมายเลขคู่ที่ 2 คือ: " . $row["number"] . "</b> </center><p style='margin-top:30px;'>" . $row["meaning"] . "</p><br>";
				}
			} else {
				echo "0 results";
			}

			// เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 3
			$sql = "SELECT * FROM `num-meaning` WHERE number='$num3'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<br><center><b class='alert alert-secondary'> ความหมายเลขคู่ที่ 3 คือ " . $row["number"] . "</b></center><p style='margin-top:30px;'> " . $row["meaning"] . "</p><br>";
				}
			} else {
				echo "0 results";
			}

			// เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 4
			$sql = "SELECT * FROM `num-meaning` WHERE number='$num4'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {
					echo "<br><center><b class='alert alert-secondary'> ความหมายเลขคู่ที่ 4 คือ " . $row["number"] . "</b></center><p style='margin-top:30px;'> " . $row["meaning"] . "<p><br>";
				}
			} else {
				echo "0 results";
			}

			// เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 5
			$sql = "SELECT * FROM `num-meaning` WHERE number='$num5'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {
					echo "<br><center><b class='alert alert-secondary'> ความหมายเลขคู่ที่ 5 คือ " . $row["number"] . "</b></center><p style='margin-top:30px;'> " . $row["meaning"] . "</p><br>";
				}
			} else {
				echo "0 results";
			}

			// เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 6
			$sql = "SELECT * FROM `num-meaning` WHERE number='$num6'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {
					echo "<br><center><b class='alert alert-secondary'> ความหมายเลขคู่ที่ 6 คือ " . $row["number"] . "</b></center> <p style='margin-top:30px;'>" . $row["meaning"] . "</p><br>";
				}
			} else {
				echo "0 results";
			}



			$conn->close();








			// เข้าเงื่อนไขทำนายแบบผลรวมของเบอร์มือถือ swith case
			echo "<center><b class='alert alert-secondary' >เบอร์ " . $str . " </b></center><br>";
			echo "<u>ผลรวมเลขเบอร์นี้คือ :  <b>" . $num7 . "</u></b>";

			echo "<br>";
			//ตรวจสอบผลรวมของเลขว่า ตรงกับเลขใดและแสดงความหมายผลรวมเลขนั้น
			switch ($num7) {
				case 1:
					echo "<p>ดาวอาทิตย์ดาวพลังความเชื่อมั่น
						  เลข 1 เป็นดาวที่ทรงพลังมีอานุภาพมาก มีปฏิภาณกล้าหาญ มีความคิดดี มีชื่อเสียงด้านผู้นำ มุมานะ ทะยาน ชอบเที่ยวไปทุกที่ ชอบผจญภัย มีคนนับถือมาก</p>";
					break;

				case 2:
					echo "<p>ดาวจันทร์ดาวพลังแห่งจินตนาการ
						  เลข 2 เป็นช่างฝัน มีอารมณ์ศิลปิน มองโลกในแง่ดี แก้ไขปัญหาได้ดี เป็นคนเอื้ออาทรต่อผู้อื่น</p>";
					break;

				case 3:
					echo "<p>ดาวอังคารดาวพลังแห่งความกล้าหาญชาญชัย
						  เลข 3 รักอิสระแบบไม่มีแก่นสาร ชอบใฝ่หาความรู้ ชอบเรียนสูงๆ คนพูดจาแบบขวานผ่าซาก รักความยุติธรรม ใจกว้าง ระวังเรื่องเจ็บป่วยจากระบบประสาท ทำงานหนักมากเกินไป</p>";
					break;

				case 4:
					echo "<p>ดาวพุธพลังแห่งดาวสติปัญญา
						  เลข 4 เป็นคนฉลาดมีสติปัญญาไหวพริบดีมาก รู้ทันคน ฉลาดในการวางตัวในที่ทุกสถาน ชอบเดินทางไกล บางครั้งเหมือนขาดเพื่อนแท้ แต่เพราะความฉลาดของตนเองจึงประสบความสำเร็จในชีวิตได้</p>";
					break;

				case 5:
					echo "<p>ดาวพลังแห่งปัญญาปัญญาทางธรรมะ
						  เลข 5 มีความรู้ดี มีปัญญา เป็นคนน่าเชื่อถือและน่าเลื่อมใสศรัทธาของคนที่พบเห็น ทำการงานใดๆ มักราบรื่น มีคุณธรรม จิตใจดีมีเมตตาใฝ่ไปในทางธรรม</p>";
					break;

				case 6:
					echo "<p>ดาวแห่งศิลปะวิทยาการ
						  เลข 6 มีความสุขสบาย มีจินตนาการ ชอบศิลปะ ชอบอิสระ มีโลกส่วนตัว ไม่เบียดเบียนใคร จิตใจดีมีเมตตา ผู้คนรักใคร่ มีเสน่ห์ มีตำแหน่งหน้าที่การงานดี ร่ำรวยด้วยทรัพย์สินเงินทอง</p>";
					break;

				case 7:
					echo "<p>ดาวเสาร์ดาวพลังแห่งทุกข์โศก
						  เลข 7 เป็นคนรักอิสระและมีความคิดเป็นของตนเองอย่างเด่นชัด ไม่ชอบตามแบบใคร เป็นคนรักงานศิลปะ นักเขียน นักวาด นักกวี มีความพิเศษในการแก้ไขปัญหา เป็นคนใจบุญศุลทาน
						  </p>";
					break;

				case 8:
					echo "<p>ดาวราหูพลังแห่งความลุ่มหลงมัวเมา
						  เลข 8 เป็นคนพูดน้อย ขี้อาย ชอบปลีกตัวอยู่ตามลำพัง ไม่ใคร่คบค้าสมาคมกับใครง่าย ตอนเป็นเด็กสุขภาพไม่แข็งแรง ป่วยบ่อย โตขึ้นร่างกายจะแข็งแรง อายุยืน เป็นคนมีอารมณ์ขันแบบลึก ไม่ค่อยมีอารมณ์ขัน มาดขรึมๆ ชอบเอาความคิดของคนอื่นมาลบล้างความคิดของตนเอง มีระเบียบวินัย เฉลียวฉลาด แต่ภายในจิตใจแล้วจะเดียวดาย ต้องการความรัก ความอบอุ่น ไม่ต่างอะไรกับเด็ก สุขภาพ มักมีปัญหาในเรื่องตับ ถุงน้ำดี ระบบขับถ่าย มักมีอาการปวดศรีษะ โลหิตเป็นพิษ โรคเจ็บปวดตามข้อ</p>";
					break;

				case 9:
					echo "<p>พลังดาวเกตุพลังแห่งความลึกลับ
						  เลข 9 คล้ายเป็นคนหยิ่งยโส แต่ลึกเป็นคนขาดความเชื่อมั่นในตนเองมากๆ เป็นคนที่มีความตั้งใจจริง มักตัดสินใจอะไรด้วยอารมณ์ชั่ววูบและต้องมานั่งเสียใจกับการตัดสินใจในภายหลัง เป็นคนปากกับใจตรงกัน อารมณ์ร้อน โกรธง่ายหายเร็ว ทำคุณคนไม่ขึ้น ปิดทองหลังพระ มักพบกับความตรงกันข้าม ความไม่จริงใจ ความหลอกลวง</p>";
					break;

				case 10:
					echo "<p>พลังแห่งอุปสรรค
						  เลข 10 เป็นคนมีความมั่นใจในตัวเองสูง มีความทะเยอทะยานดี ชอบของแปลกใหม่ ไม่ชอบซ้ำแบบใคร เป็นคนถือเกียรติ ไม่ชอบอยู่ใต้บังคับบัญชาของใคร ไม่ค่อยนุ่มนวล กล้าได้กล้าเสีย ชีวิตมักมีอุปสรรค จับงานอะไรมักจะเจอคู่แข่ง มีคนปองร้าย บริวารมักให้โทษ เป็นคนอาภัพ มีศัตรูรอบด้าน ชีวิตมักจะมีเรื่องระทมขมขื่นแอบแฝงอยู่ มีโรคภัยไข้เจ็บเบียดเบียนอย่างเรื้อรัง ระวังโรคหัวใจ มีภาระหนี้สิน มีศัตรูคอยกลั่นแกล้ง ชีวิตก็มีประสบความสำเร็จอยู่บ้าง คือสำเร็จอย่างแหวกแนวไม่เหมือนใคร แต่ถ้าเวลาดวงตกก็จะสูญสิ้นในพริบตา</p>";
					break;

				case 11:
					echo "<p>พลังแห่งความขัดแย้งในตัวเอง
						  เลข 11 เป็นคนหลงตัวเองเป็นหลักชอบอวดอ้าง ทำอะไรชอบเข้าข้างตัวเอง มักถือพวกพ้องเป็นคนดื้อรั้นมาก จิตใจรวนเร เชื่อคนง่าย ระวังจะโดนทรยศหักหลังจากคนที่เราไว้ใจ</p>";
					break;

				case 12:
					echo "<p>พลังแห่ง 2 บุคลิกในคนเดียว
						  เลข 12 หยิ่ง,ลุ่มหลงมัวเมาหูเบา,เจ็บไม่จำ เป็นคนเชื่อใจคนง่ายจึงมักถูกยุยงได้ง่าย ชีวิตเกิดอุบัติเหตุได้ง่าย มีโรคภัยไข้เจ็บเบียดเบียนอย่างเรื้อรัง หากหลงใครแล้วมักจะหลงอย่างไม่ลืมหูลืมตา
						  </p>";
					break;

				case 13:
					echo "<p>การเปลี่ยนแปลงทั้งดีและร้าย
						  เลข 13 ชีวิตมักเจอเรื่องทั้งเรื่องดี เรื่องร้ายอย่างฉับพลัน มีโชคอย่างไม่คาดคิดมาก่อนแต่ในขณะเดียวกันก็จะมีเหตุร้ายเกิดขึ้นอย่างไม่คาดฝันเช่นกัน ไม่ชอบให้ใครมาท้าทาย ไม่ชอบเดินตามร้อยเท้าใคร กล้าแบบไม่กลัวใคร จึงมักส่งผลให้เกิดอันตรายและล้าเหลวในบั้นปลาย เป็นคนตัดสินใจผิดพลาดทั้ง ๆ ที่รู้ ต้องระวังอุบัติเหตุทุกรูปแบบ ผ่าตัด ช่องท้อง รถคว่ำ ถูกอาวุธ ถูกคนลอบทำร้าย ครอบครัวมีปัญหาแตกร้าว ชีวิตคู่ไม่ปกติสุข ผู้ใหญ่ให้โทษ เรื่องชู้สาว และสายตามีปัญหา ผู้ใหญ่กดดัน</p>";
					break;

				case 14:
					echo "<p>พลังแห่งมีสติปัญญาไหวพริบและมงคล
						  เลข 14 มีความรู้ ความสามารถดี ฉลาดมีไหวพริบ ตำแหน่งหน้าที่การงานก้าวไกล ผู้คนยอมรับ มีศีลธรรมอันดี รักความถูกต้องเที่ยงธรรม มีส่วนน้อยที่มีอุปสรรคบ้างซึ่งเป็นเรื่องธรรมดา แต่ส่วนมากดี มีความรุ่งเรื่องเจริญก้าวหน้ามาก</p>";
					break;

				case 15:
					echo "<p>พลังแห่งเสน่ห์
						  เลข 15 เป็นตัวเลขที่ดี มีเพื่อนมาก คนรักใคร่มากมาย อารมณ์ดี จิตใจดี เข้าได้กับทุกคน มีศิลปะในการพูด ทำให้คนรักใคร่เกื้อหนุน ดวงชะตามีเกียรติยศชื่อเสียง มีโชคลาภ</p>";
					break;

				case 16:
					echo "<p>พลังชีวิตที่ต้องฝ่าฟัน
						  เลข 16 มีความทุกข์ อุปสรรค ปัญหา อับโชค วิตมักจะประสบกับโชคร้ายมากกว่าความสำเร็จ แม้จะมีวาสนาสูง เกิดเป็นลูกเศรษฐี ลูกคนรวย ชีวิตก็ต้องมีอุปสรรค มีศัตรูมาก มักจะแพ้ภัยจากศัตรู หากมีความสำเร็จของชีวิตที่ยิ่งใหญ่ ต้องระวังจะพบจุดจบอย่างไม่คาดคิด ถูกคนปองร้าย ถูกอำนาจมืดคุกคาม จะตกต่ำในบั้นปลายของชีวิต เลขนี้ไม่เหมาะกับสุภาพสตรี จะทำให้ผิดหวังในเรื่องความรักทุกรูปแบบ เช่น แต่งงานช้า ไม่ได้แต่งงาน แต่งแล้วต้องเลิก ได้พ่อหม้าย เป็นสามี เป็นเมียน้อย กินน้ำใต้ศอกคนอื่น หรือเป็นหม้ายก่อนวัยอันควร</p>";
					break;

				case 17:
					echo "<p>พลังแห่งความไม่แน่นอน
						  เลข 17 มีสติปัญญาแตกฉาน เข้าใจอะไรได้ง่าย ชีวิตมักจะพบกับอุปสรรคและความยุ่งยาก ในชีวิตอยู่บ่อย ๆ มักจะถูกผู้ใหญ่กดดัน ผู้ใหญ่มักจะให้โทษ ชีวิตขึ้น ๆ ลง ๆ ไม่แน่นอน ชีวิตสมรถไม่สมหวัง เป็นคนหูเบาเชื่อคนง่าย ค่อนข้างจะดื้อรั้นเอาแต่ใจตัวเอง</p>";
					break;

				case 18:
					echo "<p>พลังชีวิตแห่งการเปลี่ยนแปลง
						  เลข 18 อยู่ไม่ติดที่ มีการโยกย้ายเปลี่ยนแปลงบ่อยๆ ไม่สมหวังในเรื่องคู่ครอง เลขนี้ไม่เหมาะสำหรับสุภาพสตรี ให้ระวังการทรยศหักหลังการถูกหลอกลวง</p>";
					break;

				case 19:
					echo "<p>พลังแห่งความสำเร็จจากผู้อุปถัมภ์
						  เลข 19 ดวงค่อนข้างดี มีความสำเร็จและดีเด่นทางด้านการศึกษาและหน้าที่การงานสูงส่ง ไม่มีวันอับจนและตกอับ หมายเลขนี้ดีต่อชายร้ายต่อหญิง คือไม่เหมาะสำหรับผู้หญิง เพราะเป็นหญิงจะถูกกลั่นแกล้ง อาภัพรัก ชีวิตรักมักผิดหวัง หากเป็นชายจะมีความรุ่งโรจน์มาก</p>";
					break;

				case 20:
					echo "<p>พลังแห่งความสำเร็จที่ต้องอาศัยผู้อื่นช่วยหนุนนำ
						  เลข 20 ไม่ชอบอยู่นิ่งอยู่กับที่ มีความทะเยอทะยาน เพ้อฝัน เลขนี้ไม่เหมาะกับสุภาพสตรี ชีวิตมักจะมีปัญหาเรื่องคู่ กดดันจนทำให้ต้องเป็นคนไร้คู่หรือไม่ก็เป็นเมียน้อย กินน้ำใต้ศอกผู้อื่น</p>";
					break;

				case 21:
					echo "<p>พลังแห่งการพลิกผัน
						  เลข 21 เป็นคนมีเสน่ห์ เอาแต่ใจตัวเอง เป็นคนเด็ดเดี่ยวกล้าตัดสินใจ โดยที่ผู้อื่นคาดคิดไม่ถึง ชีวิตไม่ค่อยสมหวัง ชีวิตหาความแน่นอนไม่ได้เลย</p>";
					break;

				case 22:
					echo "<p>พลังแห่งการเพ้อฝัน
						  เลข 22 เป็นคนเพ้อฝัน อารมณ์อ่อนไหว หูเบาเชื่อใจคนง่าย ถูกหลอกอยู่เสมอ
						  </p>";
					break;

				case 23:
					echo "<p>พลังเสน่ห์เมตตามหานิยม
						  เลข 23 เป็นคนมีอารมณ์แข็งกร้าวโทสะจริต ไม่ยอมแพ้คน เป็นคนเจ้าชู้ หากเป็นชายมักมีเรื่องอื้อฉาวเกี่ยวกับเรื่องความรัก เป็นหญิงดี เพราะจะมีผู้ใหญ่ที่มีอิทธิพลคอยให้การช่วยเหลือสนับสนุนส่งเสริมให้ชีวิตประสบความสำเร็จเป็นอย่างดี</p>";
					break;

				case 24:
					echo "<p>พลังแห่งมหามงคลความสำเร็จ
						  เลข 24 สมบูรณ์พูนผล ชีวิตไม่ยุ่งยาก เป็นคนฉลาดมีปฏิภาณไหวพริบ ไม่ถือตัว มีเพื่อนมากมาย เป็นคนดีมีเมตตา เอื้อเฟื้อช่วยเหลือผู้อื่น หากมุ่งมั่นที่จะเป็นดารา นักร้อง ศิลปินจะประสบความสำเร็จ มีชื่อเสียงโด่งดัง แต่อย่าประมาทกับการดำรงชีวิตให้ทำบุญบ้างดีเสริมดวงชะตาได้ดีมากๆ
						  </p>";
					break;

				case 25:
					echo "<p>พลังร้ายและพลังดี
						  เลข 25 ชีวิตมีอุปสรรคมาก กว่าจะประสบความสำเร็จต้องเจออุปสรรคมากมาย ถูกศัตรูปองร้าย ถูกกลั่นแกล้ง ถูกอำนาจมืดคุกคาม ถูกปล้น ถูกจี้ ชีวิตจะพบกับความผันผวนอย่างรุนแรง อาจถูกปองร้ายจนถึงแก่ชีวิต ต้องประสบกับการเปลี่ยนแปลง ทำให้ชีวิตขึ้น ๆ ลง ๆ หาความแน่นอนไม่ได้</p>";
					break;

				case 26:
					echo "<p>พลังแห่งความไม่มั่นคง
						  เลข 26 มีความสำเร็จแต่ไม่ยั่งยืนถาวร ระวังเรื่องโลกีย์ไว้ให้มากๆ ระวังการผิดศีลธรรมเรื่องโลกีย์</p>";
					break;

				case 27:
					echo "<p>พลังแห่งความมุ่งมั่น
						  เลข 27 ชีวิตประสบความสำเร็จอย่างงดงาม แต่ชีวิตมักจะมีความกดดันอย่างรุนแรง ทำให้เหมือนคนอมทุกข์ มีโรคภัยไข้เจ็บแทรกประจำตัว ถ้าเป็นชายมักผิดหวังเรื่องความรักบ่อยๆ ระวังมักจะมีโรคภัยไข้เจ็บอย่างเรื้อรัง</p>";
					break;

				case 28:
					echo "<p>พลังแห่งความแปรปรวน
						  เลข 28 เสียมากกว่าดี เป็นคนไม่รอบคอบ เป็นคนเบื่อง่าย ไม่ไว้ใจผู้อื่น มักมีเรื่องทุกข์ใจ ไม่มีความสุขในชีวิตสมรส ต้องพลัดพรากจากกันอยู่กันคนละทิศละทาง</p>";
					break;

				case 29:
					echo "<p>พลังความรุนแรง
						  เลข 29 ชีวิตมักจะหักกลาง ถูกปองร้ายจากศัตรู ระวังเรื่องอุบัติเหตุ ชีวิตอมทุกข์ ไม่ยอมคน มั่นใจในตนเอง เผด็จการ ภายนอกสดใส แต่ภายในอมทุกข์ ให้ระวังเพื่อนที่ไม่ซื่อ และเพศตรงข้าม
						  </p>";
					break;

				case 30:
					echo "<p>พลังแห่งอุบัติเหตุ
						  เลข 30 ชีวิตไม่หยุดนิ่งอยู่กับที่ แต่ะทำอะไรต้องระวังมีสติให้มาก ชีวิตมีอุปสรรคบ้าง แต่ไม่มาก เป็นคนมีเพื่อนน้อย ค่อนข้างเงียบขรึม ไม่ชอบแสดงตัว ชอบใช้ชีวิตอยู่ตามลำพัง
						  </p>";
					break;

				case 31:
					echo "<p>พลังแห่งความไม่แน่นอนของโชคชะตา
						  เลข 31 ชีวิตในเบื้องต้นจะลำบาก แต่จะประสบความสำเร็จในบั้นปลาย แต่ระวังชีวิตมักจะหักกลาง ความรักหักกลางคัน ชีวิตสมรสไม่แน่นอน ระวังเรื่องอุบัติเหตุรถคว่ำ ถูกอาวุธ ถูกคนลอบทำร้าย การผ่าตัด และการถูกแย่งชิงตำแหน่งหน้าที่การงาน
						  </p>";
					break;

				case 32:
					echo "<p>พลังแห่งเจ้าชู้มีเสน่ห์
						  เลข 32 เป็นคนเจ้าชู้ มีเสน่ห์ มักต้นร้ายปลายดี ต้องระวัง ชีวิตมักจะมีอุบัติเหตุ มีโรคภัยไขเจ็บเบียดเบียนอย่างเรื้อรัง มีคนอุปถัมภ์</p>";
					break;

				case 33:
					echo "<p>พลังความฉุนเฉียวเร้าร้อน
						  เลข 33 มีอารมณ์ฉุนเฉียว เร่าร้อน รุนแรง ทำอะไรชอบเอาแต่ใจตนเอง ระวังอันตรายแบบฉับพลัน มักจะประสบอุบัติเหตุอย่างร้ายแรง มักจะมีอันตรายเกี่ยวกับความเร็ว เช่น อุบัติเหตุทางรถยนต์ การทะเลาะวิวาท
						  </p>";
					break;

				case 34:
					echo "<p>พลังแห่งความรอบรู้ครุ่นคิด
						  เลข 34 เป็นคนมีสติปัญญาแตกฉาน ว่องไว มีปฏิภาณดีเป็นคนกล้าหาญ กล้าพูดกล้าทำ แต่ชีวิตมีอุปสรรคมาก เหน็ดเหนื่อยมาก ลำบากอยู่กับปัญหาตลอด แต่ก็เอาตัวรอดได้ ให้ระวังเรื่องอุบัติเหตุหรือการพลัดตกหกล้ม ถึงขั้นทำให้เป็นอัมพาตได้</p>";
					break;

				case 35:
					echo "<p>พลังแห่งคุณและโทษ
						  เลข 35 ไม่ค่อยดีนัก ชีวิตมักอาภัพ กำพร้า ชีวิตบั้นปลายมีความสำเร็จดี มีผู้อุปถัมภ์ แต่ต้องระวังการหลงผิด มักหูเบาเชื่อใจคนง่าย จะมีคนชั่วร้ายเข้ามาสู่ชีวิต</p>";
					break;

				case 36:
					echo "<p>พลังแห่งความรักความอบอุ่น
						  เลข 36 เลข 36 เป็นเลขที่หมายถึงความรัก ความสดชื่นของชีวิต ชีวิตจะประสบความสำเร็จเป็นอย่างดี มีมิตรสหาย มาก สติปัญญามีหัวทางประดิษฐ์คิดค้น ถ้าเป็นเด็กจะฉลาดเรียนเก่ง เป็นคนมีเสน่ห์ดึงดูดใจเพศตรงข้าม และเพศตรงข้ามมักให้ความอบอุ่นเป็นอย่างดี โชคดีมีการงานดีตำแหน่งสูง เด่นในด้านความรัก มีเสน่ห์ คู่ครองดีมีความรู้ ดาวศุกร์กับดาวอังคารเป็นดาวคู่มิตรกัน รวมกันได้ 9 ดีมาก</p>";
					break;

				case 37:
					echo "<p>พลังความวิบัติ
						  เลข 37 ไม่ดีเลย ชีวิตมีแต่เรื่องขัดแย้ง ทะเลาะวิวาท โชคร้าย ผ่าตัด อุบัติเหตุ คู่ครองมีเหตุให้เป็นไป พรัดพราก ชีวิตมีมุมหักเหตลอดเวลาขึ้น ๆ ลง ๆ ไม่ราบรื่นนัก</p>";
					break;

				case 38:
					echo "<p>พลังแห่งโมหะจริต
						  เลข 38 เป็นเลขร้าย ส่งผลในทางไม่ดี หมกมุ่นอยู่กับกามคุณ ทางทางผิด ติดเหล้ายา ติดการพนัน และอบายมุขทุกอย่าง เชื่อตัวเองมากเกินไป หมกมุ่นอยู่กับไสยศาสตร์ เวทมนต์คาถา ส่งผลร้ายต่อชีวิต ผิดทำนองคลองธรรม โกรธง่าย อารมณ์ฉุนเฉียว เป็นคนเจ้าอารมณ์</p>";
					break;

				case 39:
					echo "<p>พลังแห่งความกดดัน
						  เลข 39 ชีวิตพบเจอเรื่องยุ่งยากบ่อยๆ แต่ก็มีมิตรสหายให้ความเกื้อกูลช่วยเหลือเป็นอย่างดี</p>";
					break;

				case 40:
					echo "<p>พลังอำนาจมหัศจรรย์
						  เลข 40 ไม่เดือดร้อนอะไร เป็นคนใฝ่รู้ชอบค้นคว้าหาความรู้ ชอบสนุกสนาน สุขสบาย ชอบเดินทางไกลท่องเที่ยว ชอบสิ่งใหม่ๆ และแปลกๆ ไม่ชอบอยู่ติดที่ เป็นคนอ่อนไหวง่าย ดวงชะตาจัดว่าดี
						  </p>";
					break;

				case 41:
					echo "<p>พลังมหาจักรวาล
						  เลข 41 นี้เป็นเลขที่ดีมาก เป็นพลังมหาจักรวาล มีความรุ่งโรจน์ สุขสบาย เป็นคนฉลาด ชีวิตไม่ตกต่ำ มีคนคอยช่วยเหลือมากมาย มีคนอุปถัมภ์ เพื่อนมิตรสหายมาก บ่งถึงความสำเร็จในชีวิตเป็นอย่างดี ผู้ใหญ่มักจะให้การอุปถัมภ์ ปัญญาว่องไว มีสมองปราดเปรื่อง ตั้งแต่วัยเด็กเป็นคนเข้ากับมิตรสหายได้อย่างสนิท ควรเสริมชะตาด้วยการทำบุญ</p>";
					break;

				case 42:
					echo "<p>พลังโรแมนติค
						  เลข 42 เป็นเลขมงคลยิ่ง 4 ดาวพุธ รวมกับ 2 ดาวจันทร์ รวมกันได้ 6 ดาวศุกร์ เป็นคนใจเย็น มีจินตนาการกว้างไกล อารมณ์ศิลปะ ชอบกวีนิพนธ์ มีจิตใจละเอียดอ่อน โรแมนติก มีความละมุนละไม ในสายเลือด มีหัวทางประดิษฐ์คิดค้น สมองแจ่มใสมาก สู้ชีวิต เรื่องรักและการงานสำเร็จดังใจ มีเงินทองไม่ขาดมือ ชีวิตประสบความสำเร็จเป็นอย่างดี มีมิตรสหายมาก มักเป็นที่รักแก่คนทั้งมวล
						  </p>";
					break;

				case 43:
					echo "<p>พลังวิปริต
						  เลข 43 มีศัตรูคอยกลั่นแกล้งอยู่เบื้องหลังตลอดเวลา มีอุปสรรค ความทุกข์ ความผิดหวังล้มเหลว</p>";
					break;

				case 44:
					echo "<p>พลังส่งเสริมความสำเร็จ
						  เลข 44 เลข ๔๔ เป็นเลขที่ส่งเสริมทุกด้านทั้งหน้าที่การงาน การเรียน ความรัก ส่งเสริมความสำเร็จทุกด้าน ไม่ลำบาก มีผู้ใหญ่คอยเกื้อหนุน แต่เลข ๔๔ นี้รวมกันได้ ๘ ทำให้หลงระเริง ระวังอย่าประมาทในการดำรงชีวิต ดวงชะตาถือว่าดี มีเพียงจุดเสียเล็กน้อยเท่านั้น จุดเสียคือคุณเป็นคุณใจน้อย เอาแต่ใจตัวเอง ถ้าแก้จุดนี้ได้จะดีมาก</p>";
					break;

				case 45:
					echo "<p>พลังการสู้อีกครั้ง
						  เลข 45 ดวงดีมาก ดาว 4 (พุธ) กับดาว 5 (พฤหัส) รวมกันได้ 9 (ดาวเกตุ) การงานก้าวหน้า ปัญญาดีฉลาดหลักแหลม ใจสู้ไม่ถอย ก้าวหน้าตลอดเวลา มีคนคอยช่วยเหลือ โชคดีมีลาภ เจริญรุ่งเรือง ชีวิตมักจะมีโชคอยู่เนืองๆ มักจะประสบโชคอันไม่คาดหวังอยู่บ่อยๆ สติปัญญาแจ่มใสดีมาก และจะได้รับความร่วมมือจากทุกวงการเป็นอย่างดี</p>";
					break;

				case 46:
					echo "<p>พลังแห่งโชค
						  เลข 46 มีความสุข มีความสำเร็จ มีเพื่อนมาก เสียอยู่นิดตรงที่เป็นคนใจอ่อน มักตกอยู่ใต้อิทธิพลคนอื่นได้ง่าย</p>";
					break;

				case 47:
					echo "<p>พลังแห่งความเพียร
						  เลข 47 มักจะใจอ่อนเชื่อคนง่าย แต่ถ้าดื้อรั้นขึ้นมาก็ยากที่จะหยุดได้ ต้องระวังการหลงผิด ชีวิตกว่าจะประสบความสำเร็จต้องเหนื่อยและต้องใช้ความพยายามและอดทนสูง</p>";
					break;

				case 48:
					echo "<p>พลังการหลง
						  เลข 48 ไม่ดีเลย ควรระวังอย่าเชื่อใจใครง่ายๆ จะถูกจูงหว่านล้อม หลงผิด ระวังจะประสบอุบัติเหตุ มักมีโรคภัยไข้เจ็บเบียดเบียน</p>";
					break;

				case 49:
					echo "<p>พลังความยุ่งยาก
						  เลข 49 ไม่ค่อยดี มีความอับโชค ชีวิตมีอุปสรรค มักถูกอำนาจมืดคุกคาม ถ้าเป็นสุภาพสตรีจะถูกญาติสามีกดดันกลั่นแกล้ง</p>";
					break;

				case 50:
					echo "<p>พลังแห่งปัญญาและความสามารถ
						  เลข 50 ดวงดีมาก โดยเฉพาะเรื่องปัญญา มีความสามารถ ดีเด่นทางทำงานต่างประเทศ มักพบคู่รักต่างแดน เป็นคนมีญาณพิเศษ มีบุญ ถ้าทำธุรกิจติดต่อกับชาวต่างชาติ เช่น ธุรกิจส่งออกเป็นต้นจะประสบความสำเร็จอย่างดี</p>";
					break;


				case 51:
					echo "<p>พลังความสมบูรณ์
						  เลข 51 บวกกันได้ 6 ดาวศุกร์ ถือว่าเป็นเลขดีเลขหนึ่งเพราะเป็นดาวศุภเคราะห์ บ่งถึงความสำเร็จ มีมิตรสหายมาก มีรสนิยมในทางศิลป์ ฝีมือละเอียดอ่อนปราณีต เลข 5 ดาวพฤหัส เลข 1 ดาวอาทิตย์ ธาตุไฟทั้งคู่ จึงส่งเสริมให้มีอำนาจ สติปัญญาแตกฉาน อำนวยความสำเร็จให้กับชีวิตเป็นอย่างดี เป็นเลขที่ดีมีมงคล มีความเจริญด้านการงาน ธุรกิจ การเงิน การเรียน เรื่องความรัก สารพัด ไม่ติดขัด มีผู้ใหญ่คอยช่วยเหลือ มีพรสวรรค์ทางสร้างสรรค์ ศิลปะ ดนตรี การพูด มีเสน่ห์ เป็นเลขที่สมบูรณ์ดียิ่ง</p>";
					break;

				case 52:
					echo "<p>พลังการสนับสนุนค้ำจุน
						  เลข 52 มีความสำเร็จด้านการงานและความรักดี หากเป็นชายจะมีคุณสนับสนุนจากผู้หญิง หรือเจ้านายคนใกล้ชิด จะก้าวไกลทุกด้าน แต่ต้องอดทนฟันฝ่าอุปสรรคบ้าง หากเป็นหญิงจะมีอุปสรรคเพราะกรรมเก่า
						  </p>";
					break;

				case 53:
					echo "<p>พลังการหักเห
						  เลข 53 ชีวิตมีทั้งดีและร้ายปะปนกันไป ไม่มากไม่น้อย อย่าหูเบาเชื่อคนง่าย ให้ดำเนินชีวิตด้วยความไม่ประมาท ทำอะไรให้รอบคอบ จะเกิดผลดีและชีวิตจะประสบความสำเร็จ</p>";
					break;

				case 54:
					echo "<p>พลังมหาราชาโชคความสำเร็จ
						  เลข 54 เป็นมงคลแก่ชีวิตยิ่งที่ได้ชื่อนี้ เพราะรวมกันได้ ๙ พอดี เรื่องงาน ความรัก และอื่นๆ สำเร็จสมปรารถนา จะมีตำแหน่งสูง คนเคารพนับถือ ปัญญาดี เรียนอะไรก็แตกฉาน มีคนคอยค้ำจุนหนุนส่ง ไม่มีทางตกต่ำหรือขาดแคลน สิ่งศักดิ์สิทธิ์คุ้มครอง</p>";
					break;

				case 55:
					echo "<p>พลังความสุขสมหวัง
						  เลข 55 นี้บ่งบอกถึงความสมบูรณ์พูนผล มีสุขสำเร็จดังใจหวัง การงานก็ตำแหน่งสูง ความรักดี มีแฟนฉลาดและดวงดี มีหลักฐาน ทำธุรกิจการค้าขายก็จะได้กำไรเพิ่มพูนยิ่ง คุณเป็นคนมีศีลธรรม ชอบความยุติธรรม คนรักมากมาย มีเสน่ห์ มีศีลธรรม จิตใจดีมีเมตตา ผู้คนรักใคร่ มีสติปัญญาเฉลียวฉลาด เป็นเลขที่มีความสุขสมบูรณ์มาก</p>";
					break;

				case 56:
					echo "<p>พลังศิลป์และปัญญา
						  เลข 56 ดวงชะตาอยู่ในเกณฑ์ดีมาก เพราะมีดาวศุกร์กับพฤหัสบดี มีความโดดเด่นด้านปฏิภาณไหวพริบ อารมณ์ศิลป์ ทำอะไรมีความรอบคอบดี ประสบความสำเร็จทุกด้าน เช่น การเรียน การงาน การเงิน มองโลกในแง่ดี สู้อย่างไม่ถอย นำชีวิตไปสู่จุดหมายคือความสำเร็จได้ อีกอย่างเป็นคนมีเสน่ห์ มีน้ำใจ ผู้คนรักใคร่มากมาย
						  </p>";
					break;

				case 57:
					echo "<p>พลังความมั่นใจในตัวเองสูง
						  เลข 57 เป็นคนค่อนข้างจะดื้อรั้น ชีวิตไม่ค่อยแน่นอน ทำอะไรไม่ค่อยประสบความสำเร็จเพราะยกเลิกกลางครัน</p>";
					break;

				case 58:
					echo "<p>พลังความลุ่มหลงงมงาย
						  เลข 58 ไม่ดีเลย หลงผิด เห็นกงจักรเป็นดอกบัว ออกนอกลู่นอกทางอยู่เสมอ</p>";
					break;

				case 59:
					echo "<p>พลังแห่งขนบธรรมเนียมประเพณี
						  เลข 59 จิตใจดีมีเมตตาสูง มีศีลธรรม ดวงด้านความรักดี มีคนคอยช่วยเหลือ เจริญรุ่งเรือง</p>";
					break;

				case 60:
					echo "<p>พลังความเพ้อฝันและจินตนาการ
						  เลข 60 เป็นคนรักสวยรักงาม ชอบความเป็นอยู่อย่างโอ่อ่าและเพ้อฝัน ทำอะไรมักเกินตัว ดีสำหรับหญิง แต่ไม่ดีสำหรับชาย เด็กผู้ชายทำให้จิตใจเบี่ยงเบนเป็นตุ๊ด (กระเทย) ได้งาย</p>";
					break;

				case 61:
					echo "<p>พลังบุคลิกซ้อน
						  เลข 61 ไม่ค่อยดีนัก มีความขัดแย้งในตัวเอง เป็นเลขแห่งความทุกข์ อุปสรรค และปัญหาบั้นปลายชีวิต จะตกต่ำและเหน็ดเหนื่อย</p>";
					break;

				case 62:
					echo "<p>พลังการเกื้อกูลและพลิกผัน
						  เลข 62 ไม่ดีเลย หลงผิดได้่ง่าย เพราะปล่อยตัวปล่อยใจเกินไป ดีตรงที่มีคนคอยช่วยเหลืออุปถัมภ์ เป็นชายมีเสน่ห์ต่อเพศตรงข้าม</p>";
					break;

				case 63:
					echo "<p>พลังความรักไม่มีสิ้นสุด
						  เลข 63 ดีมาก ไม่มีอุปสรรคและเรื่องยุ่งยาก ก้าวหน้าด้านการงาน การเรียนดี ดีเด่นเรื่องความรัก มีเพื่อนมาก ควรทำบุญเสริมดวงจะดีมากๆ และจะโชคดีตลอด</p>";
					break;

				case 64:
					echo "<p>พลังความอ่อนไหวและการเปลี่ยนแปลง
						  เลข 64 เป็นคนมีรสนิยมสูง มีเสน่ห์ แต่ระวังจะถูกผู้อื่นหลอกลวง ชีวิตพบความสำเร็จ มีความสุข ความสะดวกของชีวิตพอสมควร</p>";
					break;

				case 65:
					echo "<p>พลังความก้าวหน้าและเสน่ห์
						  เลข 65 เป็นเลขที่อยู่ในเกณฑ์ดี หากชื่อของคุณบวกรวมกับสกุลแล้วได้เลขนี้ พยากรณ์ได้เลยว่าเจ้าของชื่อเป็นคนฉลาดไหวพริบดี รักความก้าวหน้า จะได้รับความช่วยเหลือจากผู้ใหญ่หรือมีผู้คอยช่วยเหลืออยู่ตลอด กิจการและการงานราบรื่น เลขนี้จะดีเด่นเรื่องความก้าวหน้าและเรื่องของความรักมีเสน่ห์แก่เพศตรงข้ามมากเป็นพิเศษ</p>";
					break;

				case 66:
					echo "<p>พลังแห่งอารมณ์และความรู้สึก
						  เลข 66 ไม่ดีเลย มอมเมา ลุ่มหลง ไม่พิจารณาไตร่ตรอง เป็นเลขอันตราย</p>";
					break;

				case 67:
					echo "<p>พลังแห่งความผิดหวัง ทุกข์เศร้า
						  เลข 67 ชีวิตมีอุปสรรค ผิดหวัง ขัดแย้ง ครอบครัวแตกร้าว ตกต่ำในบั้นปลายของชีวิต</p>";
					break;

				case 68:
					echo "<p>พลังแห่งอบายมุข
						  เลข 68 ไม่ดีเลย ลุ่มหลง มัวเมา หลงไหล ขาดสติในการพิจารณา อาจถูกชักจูงหรือถูกหลอกได้ง่าย
						  </p>";
					break;

				case 69:
					echo "<p>พลังความอ่อนไหว
						  เลข 69 เป็นคนใจอ่อน ชอบเพ้อฝัน ทำให้ตกอยู่ใต้อิทธิพลผู้อื่นได้ง่าย แต่ยังดีที่มีผู้ใหญ่คอยให้การอุปถัมภ์ค้ำชู จึงพอทำให้ชีวิตไปรอด</p>";
					break;

				case 70:
					echo "<p>พลังแห่งเคราะห์กรรม
						  เลข 70 ไม่ดีเลย ให้ระวังความคิด อย่าหลงผิด ควรดำเนินชีวิตด้วยความรอบคอบไม่มาท เพราะเลขนี้ร้ายมาก บั้นปลายในชีวิตจะมีการฆ่าตัวตาย อาจจะเกิดขึ้นจากอารมณ์ชั่ววูบ ความกดดัน</p>";
					break;

				case 71:
					echo "<p>พลังแห่งการถูกโจมตี
						  เลข 71 ไม่ดีเลย เป็นเลขบ่งบอกถึงความตกต่ำ ถูกใส่ร้าย คดีความ วิบัติ ฉิบหาย การหลงมัวเมา เรื่องความรักก็ไม่สมหวังทั้งสตรีและบุรุษ</p>";
					break;

				case 72:
					echo "<p>พลังชะตาแข็ง
						  เลข 72 ชีวิตเจริญรุ่งเรืองดี แต่มักวุ่นวาย มักจะได้รับทุกข์อันเกิดจากเพศตรงข้าม มีเคราะห์บ่อยๆ และให้ระวังเรื่องโรคภัยไข้เจ็บ</p>";
					break;

				case 73:
					echo "<p>พลังดาวบาปเคราะห์ที่ร้ายแรง
						  เลข 73 ไม่ดีเลย ระวังเรื่องที่เกิดขึ้นโดยฉับพลันอย่างไม่ทันตั้งตัว เช่น อุบัติเหตุ ผ่าตัด ล้มละลาย ชีวิตไม่ค่อยประสบความสำเร็จ วิธีแก้ควรปล่อยวางกับชีวิตบ้าง</p>";
					break;

				case 74:
					echo "<p>พลังอารมณ์ที่อ่อนไหว
						  เลข 74 มีความสำเร็จดี ถึงไม่ก้าวหน้าสูงสุด ก็ประสบความสำเร็จในระดับหนึ่ง ระวังอย่าหูเบาเชื่อคนง่าย</p>";
					break;

				case 75:
					echo "<p>พลังต้นร้ายปลายดี
						  เลข 75 ต้นร้ายปลายดี คือเบื้องต้นไม่ประสบความสำเร็จ แต่บั้นปลายชีวิตจะรุ่งโรจน์มาก ชีวิตมีความวุ่นวาย มักถูกตำหนิจากผู้ใหญ่ ผู้ใหญ่ให้โทษ เลขนี้ไม่เหมาะกับนักธุรกิจ</p>";
					break;

				case 76:
					echo "<p>พลังความยากลำบาก
						  เลข 76 ไม่ดีเลย ชีวิตมักจะอับเฉา บ้านแตกสาแหรกขาด ไม่มีความสุขในชีวิตสมรสมักร้างคู่</p>";
					break;

				case 77:
					echo "<p>พลังแห่งความกดดัน
						  เลข 77 ไม่ดีเลย บ่งถึงความทุกข์สองเท่า มีแต่ความโชคร้าย มักมีโรคภัยไข้เจ็บ ชีวิตเหน็ดเหนื่อยมาก แต่ดีตรงที่มีคนยำเกรง มีอำนาจบารมี</p>";
					break;

				case 78:
					echo "<p>พลังแห่ง ความเดือดร้อน
						  เลข 78 ไม่ค่อยดีนัก เจอเรื่องร้ายๆ บ่อย ให้ระวังเรื่องอุบัติเหตุและคดีความ อย่าใจอ่อนเชื่อคนง่าย</p>";
					break;

				case 79:
					echo "<p>พลังทรัพย์และสุขภาพ
						  เลข 79 จัดอยู่ในเกณฑ์ดี มีฐานะมั่นคง บรรพบุรุษเป็นคนดี สร้างฐานะไว้ดี คุณจะได้รับทรัพย์มรดก หรือสิ่งที่ท่านสร้างไว้ให้ ไม่เดือดร้อนเรื่องการเงิน ลงทุนทำธุรกิจอะไรก็จะประสบความสำเร็จ แต่อย่าหักโหมจนลืมรักษาสุขภาพตัวเอง สุขภาพดีมาก ไม่มีโรคภัยไข้เจ็บ แต่หากมีก็หายในไม่ช้า ชีวิตมีอุปสรรคบ้างแต่ไม่ค่อยมาก ต้องลำบากก่อนจึงจะได้ดี</p>";
					break;

				case 80:
					echo "<p>พลังอัปมงคล
						  เลข 80 ไม่ดีมากๆ เลย ถูกครอบงำ ถูกข่มเหงรังแกจากคนไม่ดี (คนพาล) ถูกข่มขี่ ถูกปล้นจี้ ชิงทรัพย์ ผู้หญิงระวังการถูกฆ่าข่มขืน</p>";
					break;

				case 81:
					echo "<p>พลังการพลัดพราก
						  เลข 81 ไม่ดีเลย กำพร้า อาภัพ พลัดพรากจากบุพการี อยู่ไม่เป็นที่ โยกย้ายบ่อย แต่ชะตาชีวิตก็รุ่งเรืองดี</p>";
					break;

				case 82:
					echo "<p>พลังที่ไม่มั่นคง
						  เลข 82 ชีวิตมักจะหว้าเหว่หงอยเหงา ถ้าเป็นชายมีโอกาสไร่คู่ หรืออาภัพคู่ ถ้าเป็นหญิงจะมีพ่อหม้ายเข้ามาพัวพัน</p>";
					break;

				case 83:
					echo "<p>พลังความผิดพลาด
						  เลข 83 ไม่ดี มักมีเหตุให้แตกหักเสียหายเสมอ ระวังภัยคุกคามจากคนไม่ดี (คนพาล) ระวังอย่าเชื่อคนง่าย</p>";
					break;

				case 84:
					echo "<p>พลังเลขร้าย
						  เลข 84 เป็นเลขไม่ดีเลย มักประสบชะตากรรมไม่ดี (โชคร้าย) ระวังเรื่องอุบัติเหตุ คดีความ</p>";
					break;

				case 85:
					echo "<p>พลังความหลงผิด
						  เลข 85 อาจหลงผิดได้ง่าย ลืมตัว เอาแต่ใจตัวเอง มักกำพร้าและขาดที่พึ่ง</p>";
					break;

				case 86:
					echo "<p>พลังสำเร็จที่ต้องตั้งใจ
						  เลข 86 ชีวิตทางโลกจะประสบความสำเร็จ แต่พ่ายแพ้ทางโลกีย์ ชีวิตจะลุ่มหลงมัวเมา ระวังจิตใจที่ใฝ่ไปในทางไม่ดี</p>";
					break;

				case 87:
					echo "<p>พลังรักลวง
						  เลข 87 เป็นคนมีเสน่ห์ แต่จิตใจอ่อนไหวง่าย เจ้าอารมณ์ อมทุกข์ มักหลงผิด หูเบา เชื่อใจคนง่าย ชีวิตบั้นปลายจึงมักตกต่ำ</p>";
					break;

				case 88:
					echo "<p>พลังความสำเร็จที่แฝงความความร้ายแรง
						  เลข 88 ชีวิตประสบความสำเร็จอย่างรวดเร็ว แต่ระวังเรื่องอุบัติเหตุ หรือสิ่งที่ไม่คาดคิดอย่างฉับพลัน</p>";
					break;

				case 89:
					echo "<p>พลังแห่งความเชื่อ
						  เลข 89 เป็นคนหัวไว ฉลาด เข้าสังคมได้ดีทุกระดับ แต่ข้อเสียต้้องระวังการลุ่มหลง</p>";
					break;

				case 90:
					echo "<p>พลังสิ่งศักดิ์สิทธิ์คุ้มครอง
						  เลข 90 เชื่อเรื่องโชคลาง ดวงดีมีสิ่งศักดิ์สิทธิ์คุ้มครอง มักแคล้วคลาดจากอันตรายต่างๆ ตกน้ำไม่ไหลตกไฟไม่ไหม้ มีปาฏิหารย์บ่อยๆ เลขนี้ดีมีความปลอดภัยในชีวิต ดีมาก มีเทวดารักษาคุ้มครอง เรื่องหน้าที่การงานการเงินการดำเนินชีวิตถือว่าก้าวหน้าได้มาก</p>";
					break;

				case 91:
					echo "<p>พลังความการแสวงหา
					  เลข 91 เป็นคนใฝ่หาความก้าวหน้า มีความพยายาม ขยันขันแข็ง แต่ชอบสันโดษ ชีวิตบางครั้งเหมือนอมทุกข์ ด้านการงานดีมาก แต่เสียด้านสุขภาพ ระวังจะมีโรคภัยเบียดเบียน</p>";
					break;

				case 92:
					echo "<p>พลังอนุรักษ์นิยม
					  เลข 92 ค่อนข้างหัวอนุรักษ์นิยม ชื่นชอบและสะสมของเก่า ชอบเรื่องในอดีต รักการค้นคว้า มีความอ่อนโยน มีเพื่อนฝูงมาก</p>";
					break;

				case 93:
					echo "<p>ความสำเร็จที่รุ่มร้อน
					  เลข 93 เป็นคนแข็งกร้าว เอาแต่ใจตัวเอง ชีวิตมักจะประสบอุบัติเหตุอยู่เสมอ</p>";
					break;

				case 94:
					echo "<p>พลังหลงงมงาย
						  เลข 94 ไม่ค่อยดี มีความสำเร็จแต่ชีวิตมีอุปสรรคมาก ต้องผ่าฟันอุปสรรคอยู่เสมอ</p>";
					break;

				case 95:
					echo "<p>พลังความสำเร็จบารมี
						  เลข 95 เป็นมงคลและมีผลดีมากๆ เป็นผู้โชคดีอยู่เสมอ มีคนคอยช่วยเหลือและคุ้มครอง มีเกียติยศชื่อเสียง มีคนนับถือมาก อยู่ในศีลธรรมอันดี หยั่งรู้เหตุการณ์ล่วงหน้า คู่ครองดีรักคุณมาก เกื้อกูลกันตลอดไป ตกน้ำไม่ไหลตกไฟไม่ไหม้</p>";
					break;

				case 96:
					echo "<p>พลังที่อ่อนแอ
						  เลข 96 เป็นคนใจอ่อน ระวังการหลงผิด ถ้าคบคนดีก็ดีไป ถ้าคบคนชั่ว ก็จะชั่วตามเขาไปด้วย</p>";
					break;

				case 97:
					echo "<p>พลังความรุ่งโรจน์
						  เลข 97 เป็นเลขดีชีวิตมีความรุ่งโรจน์ เหมือนฟ้าประทาน ประสบความสำเร็จในตำแหน่งหน้าที่การงาน ค้าขายได้กำไร ร่ำรวยด้วยทรัพย์สินเงินทอง มีคนเคารพนับถือ มีเกียรติในสังคม มีเพื่อนมากมาย แต่ควรระวังเรื่องอุบัติเหตุ อย่าประมาท ควรทำบุญสะเดาะเคราะห์จะเสริมดวงชะตาได้มาก</p>";
					break;

				case 98:
					echo "<p>พลังลาภลอย
						  เลข 98 ชีวิตประสบความสำเร็จดี มีพวกพ้องมาก ระวังเรื่องการคบคน</p>";
					break;

				case 99:
					echo "<p>พลังการหยั่งรู้
						  เลข 99 มีอำนาจพิเศษ มีญาณหยั่งรู้เหตุการณ์ล่วงหน้าได้อย่างแม่นยำ มีประสาทสัมผัสพิเศษ มีพลังทางจิต ทำอะไรพระคุ้มครอง มีความเจริญและมีความสุข</p>";
					break;

				case 100:
					echo "<p>พลังแห่งสมดุลจักรวาล
						  เลข 100 เป็นเลขมงคลมาก โชคดีมีลาภ ชีวิตจะรุ่งเรืองเฟื่องฟูมาก มีการงานตำแหน่งสูง หน้าที่การงาน การเงินก้าวหน้าก้าวไกล เกียติยศปรากฎไกล มีเกียรติในสังคม สมบูรณ์ทุกอย่าง สุขภาพดี ไม่มีโรคภัยไข้เจ็บ ด้านความรักก็ดี คนรักฉลาด มีรูปสมบัติพร้อมทรัพย์สินมากมาย รักกันดี พึ่งพากันและกันดวงชะตาเป็นคู่กันตลอดไป เลขกำลัง 100 นี้ดีนักไม่มีจุดเสียเลย มีแต่ความรุ่งโรจน์และสมบูรณ์ทุกอย่าง</p>";
					break;


				default:
					echo "ไม่มีเลขนี้ให้ทำนาย มีเฉพาะเลข 1 - 100 เท่านั้น";
			}
		} else {
			echo "<br><center>ยังไม่ได้ใส่เลข..โปรดใส่เลขมือถือ!!</center>";
		}
	}




	?>
</div>





	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="index.php">Lucky Mongkol</a></h1>
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="#">Sign Up</a></li>
								<li><a href="#">Log In</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">


				<h2>Destiny</h2>
				<p>Everything is happen<br />
					for the better <br />

					<a href="">thing</a>.
				</p>
				<ul class="actions">
					<li><a href="#" class="button special">Go</a></li>
				</ul>
			</div>
			<a href="#one" class="more scrolly">Learn More</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special">
			<div class="inner">
				<header class="major">
					<h2>Arcu aliquet vel lobortis ata nisl<br />
						eget augue amet aliquet nisl cep donec</h2>
					<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
						fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
				</header>
				<ul class="icons major">
					<li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
					<li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
					<li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
				</ul>
			</div>
		</section>

		<!-- Two -->
		<section id="two" class="wrapper alt style2">
			<section class="spotlight">
				<div class="image"><img src="images/pic01.jpg" alt="" /></div>
				<div class="content">
					<h2>Magna primis lobortis<br />
						sed ullamcorper</h2>
					<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image"><img src="images/pic02.jpg" alt="" /></div>
				<div class="content">
					<h2>Tortor dolore feugiat<br />
						elementum magna</h2>
					<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image"><img src="images/pic03.jpg" alt="" /></div>
				<div class="content">
					<h2>Augue eleifend aliquet<br />
						sed condimentum</h2>
					<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
				</div>
			</section>
		</section>

		<!-- Three -->
		<section id="three" class="wrapper style3 special">
			<div class="inner">
				<header class="major">
					<h2>Accumsan mus tortor nunc aliquet</h2>
					<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
						fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
				</header>
				<ul class="features">
					<li class="icon fa-paper-plane-o">
						<h3>Arcu accumsan</h3>
						<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
					</li>
					<li class="icon fa-laptop">
						<h3>Ac Augue Eget</h3>
						<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
					</li>
					<li class="icon fa-code">
						<h3>Mus Scelerisque</h3>
						<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
					</li>
					<li class="icon fa-headphones">
						<h3>Mauris Imperdiet</h3>
						<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
					</li>
					<li class="icon fa-heart-o">
						<h3>Aenean Primis</h3>
						<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
					</li>
					<li class="icon fa-flag-o">
						<h3>Tortor Ut</h3>
						<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
					</li>
				</ul>
			</div>
		</section>

		<!-- CTA -->
		<section id="cta" class="wrapper style4">
			<div class="inner">
				<header>
					<h2>Arcue ut vel commodo</h2>
					<p>Aliquam ut ex ut augue consectetur interdum endrerit imperdiet amet eleifend fringilla.</p>
				</header>
				<ul class="actions vertical">
					<li><a href="#" class="button fit special">Activate</a></li>
					<li><a href="#" class="button fit">Learn More</a></li>
				</ul>
			</div>
		</section>


		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
			</ul>
			<ul class="copyright">
				<li>&copy; Untitled</li>
				<li>Design: <a href="http://html5up.net">S-ASSET</a></li>
			</ul>
		</footer>


	</div>
	</div>

	<!-- Scripts -->
	<!--Start of Tawk.to Script-->

	<!--End of Tawk.to Script-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

</body>

</html>