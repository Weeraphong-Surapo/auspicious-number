<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<style>@import url(font-awesome.min.css);
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic");


/*
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

/* Reset */

	html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}


	article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
		display: block;
	}

	body {
		line-height: 1;
	}

	ol, ul {
		list-style: none;
	}

	blockquote, q {
		quotes: none;
	}

	blockquote:before, blockquote:after, q:before, q:after {
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

	*, *:before, *:after {
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

	.row > * {
		float: left;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row:after, .row:before {
		content: '';
		display: block;
		clear: both;
		height: 0;
	}

	.row.uniform > * > :first-child {
		margin-top: 0;
	}

	.row.uniform > * > :last-child {
		margin-bottom: 0;
	}

	.row.\30 \25 > * {
		padding: 0 0 0 0em;
	}

	.row.\30 \25 {
		margin: 0 0 -1px 0em;
	}

	.row.uniform.\30 \25 > * {
		padding: 0em 0 0 0em;
	}

	.row.uniform.\30 \25 {
		margin: 0em 0 -1px 0em;
	}

	.row > * {
		padding: 0 0 0 1.5em;
	}

	.row {
		margin: 0 0 -1px -1.5em;
	}

	.row.uniform > * {
		padding: 1.5em 0 0 1.5em;
	}

	.row.uniform {
		margin: -1.5em 0 -1px -1.5em;
	}

	.row.\32 00\25 > * {
		padding: 0 0 0 3em;
	}

	.row.\32 00\25 {
		margin: 0 0 -1px -3em;
	}

	.row.uniform.\32 00\25 > * {
		padding: 3em 0 0 3em;
	}

	.row.uniform.\32 00\25 {
		margin: -3em 0 -1px -3em;
	}

	.row.\31 50\25 > * {
		padding: 0 0 0 2.25em;
	}

	.row.\31 50\25 {
		margin: 0 0 -1px -2.25em;
	}

	.row.uniform.\31 50\25 > * {
		padding: 2.25em 0 0 2.25em;
	}

	.row.uniform.\31 50\25 {
		margin: -2.25em 0 -1px -2.25em;
	}

	.row.\35 0\25 > * {
		padding: 0 0 0 0.75em;
	}

	.row.\35 0\25 {
		margin: 0 0 -1px -0.75em;
	}

	.row.uniform.\35 0\25 > * {
		padding: 0.75em 0 0 0.75em;
	}

	.row.uniform.\35 0\25 {
		margin: -0.75em 0 -1px -0.75em;
	}

	.row.\32 5\25 > * {
		padding: 0 0 0 0.375em;
	}

	.row.\32 5\25 {
		margin: 0 0 -1px -0.375em;
	}

	.row.uniform.\32 5\25 > * {
		padding: 0.375em 0 0 0.375em;
	}

	.row.uniform.\32 5\25 {
		margin: -0.375em 0 -1px -0.375em;
	}

	.\31 2u, .\31 2u\24 {
		width: 100%;
		clear: none;
		margin-left: 0;
	}

	.\31 1u, .\31 1u\24 {
		width: 91.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 0u, .\31 0u\24 {
		width: 83.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\39 u, .\39 u\24 {
		width: 75%;
		clear: none;
		margin-left: 0;
	}

	.\38 u, .\38 u\24 {
		width: 66.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\37 u, .\37 u\24 {
		width: 58.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\36 u, .\36 u\24 {
		width: 50%;
		clear: none;
		margin-left: 0;
	}

	.\35 u, .\35 u\24 {
		width: 41.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\34 u, .\34 u\24 {
		width: 33.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\33 u, .\33 u\24 {
		width: 25%;
		clear: none;
		margin-left: 0;
	}

	.\32 u, .\32 u\24 {
		width: 16.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 u, .\31 u\24 {
		width: 8.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\31 2u\24 + *,
	.\31 1u\24 + *,
	.\31 0u\24 + *,
	.\39 u\24 + *,
	.\38 u\24 + *,
	.\37 u\24 + *,
	.\36 u\24 + *,
	.\35 u\24 + *,
	.\34 u\24 + *,
	.\33 u\24 + *,
	.\32 u\24 + *,
	.\31 u\24 + * {
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

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28xlarge\29, .\31 2u\24\28xlarge\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xlarge\29, .\31 1u\24\28xlarge\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xlarge\29, .\31 0u\24\28xlarge\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xlarge\29, .\39 u\24\28xlarge\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xlarge\29, .\38 u\24\28xlarge\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xlarge\29, .\37 u\24\28xlarge\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xlarge\29, .\36 u\24\28xlarge\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xlarge\29, .\35 u\24\28xlarge\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xlarge\29, .\34 u\24\28xlarge\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xlarge\29, .\33 u\24\28xlarge\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xlarge\29, .\32 u\24\28xlarge\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xlarge\29, .\31 u\24\28xlarge\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xlarge\29 + *,
		.\31 1u\24\28xlarge\29 + *,
		.\31 0u\24\28xlarge\29 + *,
		.\39 u\24\28xlarge\29 + *,
		.\38 u\24\28xlarge\29 + *,
		.\37 u\24\28xlarge\29 + *,
		.\36 u\24\28xlarge\29 + *,
		.\35 u\24\28xlarge\29 + *,
		.\34 u\24\28xlarge\29 + *,
		.\33 u\24\28xlarge\29 + *,
		.\32 u\24\28xlarge\29 + *,
		.\31 u\24\28xlarge\29 + * {
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

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28large\29, .\31 2u\24\28large\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28large\29, .\31 1u\24\28large\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28large\29, .\31 0u\24\28large\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28large\29, .\39 u\24\28large\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28large\29, .\38 u\24\28large\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28large\29, .\37 u\24\28large\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28large\29, .\36 u\24\28large\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28large\29, .\35 u\24\28large\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28large\29, .\34 u\24\28large\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28large\29, .\33 u\24\28large\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28large\29, .\32 u\24\28large\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28large\29, .\31 u\24\28large\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28large\29 + *,
		.\31 1u\24\28large\29 + *,
		.\31 0u\24\28large\29 + *,
		.\39 u\24\28large\29 + *,
		.\38 u\24\28large\29 + *,
		.\37 u\24\28large\29 + *,
		.\36 u\24\28large\29 + *,
		.\35 u\24\28large\29 + *,
		.\34 u\24\28large\29 + *,
		.\33 u\24\28large\29 + *,
		.\32 u\24\28large\29 + *,
		.\31 u\24\28large\29 + * {
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

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28medium\29, .\31 2u\24\28medium\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28medium\29, .\31 1u\24\28medium\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28medium\29, .\31 0u\24\28medium\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28medium\29, .\39 u\24\28medium\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28medium\29, .\38 u\24\28medium\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28medium\29, .\37 u\24\28medium\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28medium\29, .\36 u\24\28medium\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28medium\29, .\35 u\24\28medium\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28medium\29, .\34 u\24\28medium\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28medium\29, .\33 u\24\28medium\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28medium\29, .\32 u\24\28medium\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28medium\29, .\31 u\24\28medium\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28medium\29 + *,
		.\31 1u\24\28medium\29 + *,
		.\31 0u\24\28medium\29 + *,
		.\39 u\24\28medium\29 + *,
		.\38 u\24\28medium\29 + *,
		.\37 u\24\28medium\29 + *,
		.\36 u\24\28medium\29 + *,
		.\35 u\24\28medium\29 + *,
		.\34 u\24\28medium\29 + *,
		.\33 u\24\28medium\29 + *,
		.\32 u\24\28medium\29 + *,
		.\31 u\24\28medium\29 + * {
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

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28small\29, .\31 2u\24\28small\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28small\29, .\31 1u\24\28small\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28small\29, .\31 0u\24\28small\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28small\29, .\39 u\24\28small\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28small\29, .\38 u\24\28small\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28small\29, .\37 u\24\28small\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28small\29, .\36 u\24\28small\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28small\29, .\35 u\24\28small\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28small\29, .\34 u\24\28small\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28small\29, .\33 u\24\28small\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28small\29, .\32 u\24\28small\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28small\29, .\31 u\24\28small\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28small\29 + *,
		.\31 1u\24\28small\29 + *,
		.\31 0u\24\28small\29 + *,
		.\39 u\24\28small\29 + *,
		.\38 u\24\28small\29 + *,
		.\37 u\24\28small\29 + *,
		.\36 u\24\28small\29 + *,
		.\35 u\24\28small\29 + *,
		.\34 u\24\28small\29 + *,
		.\33 u\24\28small\29 + *,
		.\32 u\24\28small\29 + *,
		.\31 u\24\28small\29 + * {
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

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28xsmall\29, .\31 2u\24\28xsmall\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xsmall\29, .\31 1u\24\28xsmall\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xsmall\29, .\31 0u\24\28xsmall\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xsmall\29, .\39 u\24\28xsmall\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xsmall\29, .\38 u\24\28xsmall\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xsmall\29, .\37 u\24\28xsmall\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xsmall\29, .\36 u\24\28xsmall\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xsmall\29, .\35 u\24\28xsmall\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xsmall\29, .\34 u\24\28xsmall\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xsmall\29, .\33 u\24\28xsmall\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xsmall\29, .\32 u\24\28xsmall\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xsmall\29, .\31 u\24\28xsmall\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xsmall\29 + *,
		.\31 1u\24\28xsmall\29 + *,
		.\31 0u\24\28xsmall\29 + *,
		.\39 u\24\28xsmall\29 + *,
		.\38 u\24\28xsmall\29 + *,
		.\37 u\24\28xsmall\29 + *,
		.\36 u\24\28xsmall\29 + *,
		.\35 u\24\28xsmall\29 + *,
		.\34 u\24\28xsmall\29 + *,
		.\33 u\24\28xsmall\29 + *,
		.\32 u\24\28xsmall\29 + *,
		.\31 u\24\28xsmall\29 + * {
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

		body.is-loading *, body.is-loading *:before, body.is-loading *:after {
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
		}

	body, input, select, textarea {
		color: #fff;
		font-family: "Open Sans", Helvetica, sans-serif;
		font-size: 15pt;
		font-weight: 400;
		letter-spacing: 0.075em;
		line-height: 1.65em;
	}

		@media screen and (max-width: 1680px) {

			body, input, select, textarea {
				font-size: 13pt;
			}

		}

		@media screen and (max-width: 1280px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 736px) {

			body, input, select, textarea {
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

	strong, b {
		color: #fff;
		font-weight: 600;
	}

	em, i {
		font-style: italic;
	}

	p {
		margin: 0 0 2em 0;
	}

	h1, h2, h3, h4, h5, h6 {
		color: #fff;
		font-weight: 800;
		letter-spacing: 0.225em;
		line-height: 1em;
		margin: 0 0 1em 0;
		text-transform: uppercase;
	}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			color: inherit;
			text-decoration: none;
		}

	h2 {
		font-size: 30;
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

	section.special, article.special {
		text-align: center;
	}

	header p {
		color: rgba(255, 255, 255, 0.5);
		position: relative;
		top: -0.25em;
	}

	header h3 + p {
		font-size: 1.1em;
	}

	header h4 + p,
	header h5 + p,
	header h6 + p {
		font-size: 0.9em;
	}

	header.major {
		margin: 0 0 3.5em 0;
	}

		header.major h2, header.major h3, header.major h4, header.major h5, header.major h6 {
			border-bottom: solid 2px #fff;
			display: inline-block;
			padding-bottom: 1em;
			position: relative;
			font-family: "Kanit", Times, serif;

		}

			header.major h2:after, header.major h3:after, header.major h4:after, header.major h5:after, header.major h6:after {
				content: '';
				display: block;
				height: 1px;
				font-family: "Kanit", Times, serif;

			}

		header.major p {
			color: #fff;
			top: 0;
			font-family: "Kanit", Times, serif;

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
		font-family: "Kanit", Times, serif;

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

		input[type="checkbox"] + label,
		input[type="radio"] + label {
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

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
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

		input[type="checkbox"]:checked + label:before,
		input[type="radio"]:checked + label:before {
			background: #2e3842;
			color: #fff;
			content: '\f00c';
		}

		input[type="checkbox"]:focus + label:before,
		input[type="radio"]:focus + label:before {
			box-shadow: 0 0 0 2px #21b2a6;
		}

	input[type="checkbox"] + label:before {
		border-radius: 3px;
	}

	input[type="radio"] + label:before {
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

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
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

		.icon > .label {
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

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
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

				ul.actions.vertical li > * {
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
				font-family: "Kanit", Times, serif;

				table-layout: fixed;
				width: calc(100% + 1.5em);
			}

				ul.actions.fit li {
					display: table-cell;
					padding: 0 0 0 1.5em;
				}

					ul.actions.fit li > * {
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

					ul.actions li > * {
						margin: 0 auto !important;
						max-width: 30em;
						width: 100%;
					}

						ul.actions li > *.icon:before {
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

		input[type="submit"].disabled, input[type="submit"]:disabled,
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
			padding: 4em 4em 2em 6em ;
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
					padding: 3em 2em 1em 2em ;
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
					padding: 3em 0 1em 0 ;
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
			padding: 2em 4em 0.1em 4em ;
			font-family: "Kanit", Times, serif;

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
					padding: 4em 3em 2em 3em ;
					max-width: none;
					text-align: center;
					width: 100%;
				}

		}

		@media screen and (max-width: 736px) {

			.spotlight .content {
				padding: 3em 2em 1em 2em ;
				font-family: "Kanit", Times, serif;

			}

		}

/* Wrapper */

	.wrapper {
		padding: 6em 0 4em 0 ;
	}

		.wrapper > .inner {
			width: 60em;
			margin: 0 auto;
		}

			@media screen and (max-width: 1280px) {

				.wrapper > .inner {
					width: 90%;
				}

			}

			@media screen and (max-width: 980px) {

				.wrapper > .inner {
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

			.wrapper.style1 strong, .wrapper.style1 b {
				color: #ffffff;
			}

			.wrapper.style1 h2, .wrapper.style1 h3, .wrapper.style1 h4, .wrapper.style1 h5, .wrapper.style1 h6 {
				color: #ffffff;
				font-family: "Kanit", Times, serif;

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

			.wrapper.style1 header.major h2, .wrapper.style1 header.major h3, .wrapper.style1 header.major h4, .wrapper.style1 header.major h5, .wrapper.style1 header.major h6 {
				border-color: rgba(0, 0, 0, 0.125);
				font-family: "Kanit", Times, serif;

			}

			.wrapper.style1 header.major p {
				color: #c7ebe8;
				font-family: "Kanit", Times, serif;

			}

			.wrapper.style1 label {
				color: #ffffff;
				font-family: "Kanit", Times, serif;

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

			.wrapper.style1 input[type="checkbox"] + label,
			.wrapper.style1 input[type="radio"] + label {
				color: #c7ebe8;
			}

				.wrapper.style1 input[type="checkbox"] + label:before,
				.wrapper.style1 input[type="radio"] + label:before {
					background: rgba(255, 255, 255, 0.075);
				}

			.wrapper.style1 input[type="checkbox"]:checked + label:before,
			.wrapper.style1 input[type="radio"]:checked + label:before {
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

			.wrapper.style3 strong, .wrapper.style3 b {
				color: #ffffff;
			}

			.wrapper.style3 h2, .wrapper.style3 h3, .wrapper.style3 h4, .wrapper.style3 h5, .wrapper.style3 h6 {
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

			.wrapper.style3 header.major h2, .wrapper.style3 header.major h3, .wrapper.style3 header.major h4, .wrapper.style3 header.major h5, .wrapper.style3 header.major h6 {
				border-color: rgba(0, 0, 0, 0.125);
				font-family: "Kanit", Times, serif;

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

			.wrapper.style3 input[type="checkbox"] + label,
			.wrapper.style3 input[type="radio"] + label {
				color: #d3d4e4;
			}

				.wrapper.style3 input[type="checkbox"] + label:before,
				.wrapper.style3 input[type="radio"] + label:before {
					background: rgba(255, 255, 255, 0.075);
				}

			.wrapper.style3 input[type="checkbox"]:checked + label:before,
			.wrapper.style3 input[type="radio"]:checked + label:before {
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

			.wrapper.style5 strong, .wrapper.style5 b {
				color: #2E3842;
			}

			.wrapper.style5 h2, .wrapper.style5 h3, .wrapper.style5 h4, .wrapper.style5 h5, .wrapper.style5 h6 {
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

			.wrapper.style5 header.major h2, .wrapper.style5 header.major h3, .wrapper.style5 header.major h4, .wrapper.style5 header.major h5, .wrapper.style5 header.major h6 {
				border-color: #dfdfdf;
				font-family: "Kanit", Times, serif;

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

			.wrapper.style5 input[type="checkbox"] + label,
			.wrapper.style5 input[type="radio"] + label {
				color: #4E4852;
			}

				.wrapper.style5 input[type="checkbox"] + label:before,
				.wrapper.style5 input[type="radio"] + label:before {
					background: rgba(0, 0, 0, 0.0375);
				}

			.wrapper.style5 input[type="checkbox"]:checked + label:before,
			.wrapper.style5 input[type="radio"]:checked + label:before {
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
				padding: 4em 3em 2em 3em ;
			}

		}

		@media screen and (max-width: 736px) {

			.wrapper {
				padding: 3em 2em 1em 2em ;
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

			#menu ul > li {
				border-top: solid 1px rgba(0, 0, 0, 0.125);
				margin: 0.5em 0 0 0;
				padding: 0.5em 0 0 0;
			}

				#menu ul > li:first-child {
					border-top: 0 !important;
					margin-top: 0 !important;
					padding-top: 0 !important;
				}

				#menu ul > li > a {
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

						#menu ul > li > a {
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

			#header nav > ul {
				list-style: none;
				margin: 0;
				padding: 0;
				white-space: nowrap;
			}

				#header nav > ul > li {
					display: inline-block;
					padding: 0;
				}

					#header nav > ul > li > a {
						border: 0;
						color: #fff;
						display: block;
						font-size: 0.8em;
						letter-spacing: 0.225em;
						padding: 0 1.5em;
						text-transform: uppercase;
					}

						#header nav > ul > li > a.menuToggle {
							outline: 0;
							position: relative;
						}

							#header nav > ul > li > a.menuToggle:after {
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

								#header nav > ul > li > a.menuToggle {
									padding: 0 1.5em;
								}

									#header nav > ul > li > a.menuToggle span {
										display: none;
									}

							}

						@media screen and (max-width: 736px) {

							#header nav > ul > li > a {
								padding: 0 0 0 1.5em;
							}

						}

					#header nav > ul > li:first-child {
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

			#banner h2:before, #banner h2:after {
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
				padding: 7em 3em 5em 3em ;
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

		body.is-loading #banner h2:before, body.is-loading #banner h2:after {
			width: 0;
			font-family: "Kanit", Times, serif;

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

	#main > header {
		padding: 12em 0 10em 0 ;
		background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-attachment: fixed;
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
		text-align: center;
	}

		#main > header h2 {
			font-size: 1.75em;
			margin: 0 0 0.5em 0;
		}

		#main > header p {
			color: inherit;
			font-size: 1.75em;

			letter-spacing: 0.225em;
			text-transform: uppercase;
			top: 0;
		}

			#main > header p a {
				color: inherit;
				font-size: 1.75em;

			}

		@media screen and (max-width: 1680px) {

			#main > header {
				padding: 10em 0 8em 0 ;
			}

		}

		@media screen and (max-width: 1280px) {

			#main > header {
				padding: 8em 3em 6em 3em ;
			}

		}

		@media screen and (max-width: 980px) {

			#main > header {
				padding: 10em 3em 8em 3em ;
			}

		}

		@media screen and (max-width: 736px) {

			#main > header {
				padding: 5em 3em 3em 3em ;
			}

				#main > header h2 {
					font-size: 1.25em;
					margin: 0 0 1em 0;
				}

		}

	body.is-mobile #main > header {
		background-attachment: scroll;
	}

/* Footer */

	#footer {
		padding: 6em 0 4em 0 ;
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
			font-family: "Kanit", Times, serif;

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
				padding: 4em 3em 2em 3em ;
			}

		}

		@media screen and (max-width: 736px) {

			#footer {
				padding: 3em 2em 1em 2em ;
			}

		}

/* Landing */

	body.landing #page-wrapper {
		background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
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
		background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../../images/banner.jpg");
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	body.is-mobile.landing #footer {
		background-color: #1d242a;
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
			<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Sarabun:wght@200&display=swap" rel="stylesheet">

			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</head>
	<body class="landing">

    <?php
// นำเข้าไฟล์เพื่อเชื่อมต่อฐานข้อมูล

include 'connect.php'; ?>



<?php

// รับค่าตัวเลขมาจาก form ไฟล์ index.html




                     
                        
                        

        ?>






		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">Berlikrit</a></h1>
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
							
							
							<h2>Berlikrit</h2>
							<p>Everything is happen<br />
							for the better <br />
							
							 <a href="">thing</a>.</p>
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
								<h2>เบอร์มงคลส่งผลดีจริงหรือไม่<br />
								</h2>
								<p>หลายคนกำลังลังเลว่าเบอร์โทรศัพท์มีอิทธิพลต่อชีวิตเราจริงหรือไม่ จะเปลี่ยนดีมั้ย หลังจากที่เจอคนทักว่า เลขไม่ดี 
เลขไม่เฮง</p><br>

							</header>
							
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
								
								<p>ซึ่งโดยปัจจุบันโทรศัพท์คือปัจจัยที่5ของมนุษย์
ทุกคนต่างใช้โทรศัพท์ในการทำงาน ติดต่อกับครอบครัว คุยงาน คุยธุรกิจ เรานำมันไปด้วยทุกที แน่นอนเราขาดมือถือไม่ได้ ทำให้เบอร์โทรศัพท์ที่พวงมากับปัจจัยที่5อย่างโทรศัพท์จึงจำเป็นต้องมีหลายล้านเบอร์เพื่อให้เพียงพอต่อจำนวนประชากร เบอร์โทรศัพท์จึงเปรียบเสมือนชื่อหรือเอกลักษณ์ของผู้ใช้ไปด้วย</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
						
								<p>ศาสตร์การคำนวนตัวเลขเป็นอีกแขนงหนึ่งของศาสตร์ที่เก่าแก่ที่มีมาแต่โบราณที่จะช่วยแก้เคล็ดช่วยเสริมดวงได้อย่างอัศจรรย์
การทำนายเบอร์โทรศัพท์ก็เหมือนการดูลายมือ ดูดวงชะตาจากวันเดือนปีเกิด มันคือศาสตร์ตามความเชื่อ</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
							
								<p>ซึ่งเบอร์มงคลที่เหมาะสมกับดวงผู้ใช้มักขึ้นอยู่กับบุญกรรมของผู้ใช้คนนั้นๆ ที่จะได้ใช้เลขดีแค่ไหน เบอร์มงคลของแต่ละคนก็จึงไม่เหมือนกัน สิ่งที่ดีที่สุดและจะทำให้ชีวิตดีขึ้น คือการยึดถือความดีและความกตัญญู เพราะมันจะเป็นเครื่องนำความดีและความสำเร็จได้เอง</p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<p>แม้ได้เลขดีที่สุด แต่ไม่หมั่นทำความดีให้เพิ่มขึ้น ก็อาจจะอุปสรรคในอนาคตก็เป็นได้<br />
								หมั่นทำความดี ทำบุญ ทำทาน อย่างสม่ำเสมอ เพื่อให้สิ่งที่ดี เบอร์ดีช่วยส่งเสริมและอยู่กับเราตลอดไป</p>
							</header>
						
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
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">S-ASSET</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
		<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/62459ad40bfe3f4a8770b494/1fvfu9jnn';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
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