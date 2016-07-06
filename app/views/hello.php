<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<a href="http://laravel.com" title="Laravel PHP Framework"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIcAAACHCAYAAAA850oKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyNUVCMTdGOUJBNkExMUUyOTY3MkMyQjZGOTYyREVGMiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyNUVCMTdGQUJBNkExMUUyOTY3MkMyQjZGOTYyREVGMiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjI1RUIxN0Y3QkE2QTExRTI5NjcyQzJCNkY5NjJERUYyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjI1RUIxN0Y4QkE2QTExRTI5NjcyQzJCNkY5NjJERUYyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+g6J7EAAAEL1JREFUeNrsXQmUFcUVrT8MKqJGjIKirIIQdlBcEISgIbhEjEYlLohGwYwL0eMSUKMeEsyBiCJBIrgcILjhwsG4YGIcHRCJggtuIAiKiYKKUeMumHvp96X9zPyu+tPV2697zjs9Z6Z//+p6d169evXqVU4Z4qtj+uyLy08hfSAdIS0g2yiHpOFryFrIq5CnIQ9vM/epJSYPyGkSohEuIyDnQNq7fk8tVkKmQKaBKJ/Vmxwgxmm4/BGyu+vbzOBdyGjIDJDkW2NygBS74DILcoTry8ziIcgwEOQDbXKAGO1weRTSxvVf5rEaMggEWRlIDiHGAkgz129lNcz0B0FW1EkOGUqedRajbC1Ib/8QU1FwwwxHjLIF9T4LBiK3FTnwy2G4HOX6qOywCfK5/Hw45NTvDSsSx1gF2cP1VWZBArwGeQnyik9WYyjZCA60xs9nQk6CdMPv/lcpHzzLESPTJODPa6DwTXV9CH9bg8vlIMlsOqeQB/OWg16qi3yWAQlMUClrJY4YycWnkBU2SVAnORgAcf2fGBJwkexlkVfk+maxELdtcuzj9FLeJChGjgmQU+RnBztkuAvyiPICjGuSRoK6kHdISZCLnB5DRw3kOJDhvSQ0Bnr+AS49OFWFdJefu8qfr4OM9hM3by3GivVwy/Lh4uw4iAESMLjZ1keAPBlaFfnYpWLlxn7PcsgDT8blr06foaIryPGSZSLsJP/93UTy1qBxCY/j7OcItHl+ITn4czXkEKfT0MCMq5EhkYBWvoMovquPEK1CbvMGSC+0+83CVdkuuDwPaeD0Ggo4fh+Kjn7ckAh7FZCA0gnSMKJ203HuW1s+x0RcLnB6DQ1vK2+t4sMAQjDeNEZ8g50T0O6bKmr55VXKS/5wCAe0AlM17ttbeWsaOyek3SO3IgcY/jEuFzudhooTYRlODbjnZsjSJDW6oo7fc2VuodNpqJgiy+K1Av+U3GcyVKaTySWHBEK4R2Wj02lo2JGhAhCkQRGCvI5LVdItBxv6Ai43Op2GioMhvy12A/p9pkpIvKki4O9XQNY7nYaKq2A9egfcQ+uxKtHkAIs/cs5p6GAwazYI0rhIv38i/sfXSbYcxCznnIYOJldNDPjHZCBqTKLJIc7pucqLuzuEhxGwHkcH3HMtZH6SLQcJwpD6X5w+Q8ctIMjuAf+Y3DKyLhZyoHF9NO+9HPKe02eo2BVym38jUS0EWS8E+TYOy3GDrP8HWY8Pg6ZhDiVhsPJiSsX6npvaJ8RBDmafn655/23KqxLjEC4m4B+0k4bl/lccPsc4SRrRcU6rnHMaOraT6e22Rfqe01ruRvskanI0VV7AS8c5fc45p1bADK6xAX3PwNjIqMlBjAJzdbcpkEgfOH2Gjouggx8HEOQOGd4jJQezjCZqWg+mko12ugwdnLXMBEGaBNx3vvJ2wUUa5zgSDRusO0eP2kEqEwQmB3EHvPLC619FSQ7iOhCkoYb12CRTsG+dPkNHYHKQ+H4XR02OjkHzbl8DGf+f5nRpBUWTgwSTIQ9GSQ6Cy8q7aT5jjHNOrWBHmd42CAgtDIe8EyU5uG3u9wbO6RinSyvoE+T4o//fV95uxU1RkYM4E6ztofkcJscucbq0giuhh/0DCPJP5VWZjowcm9ddNK2Hc07tgclBzD3dIYhEkEVRkYPoh0adqEmQxTK9dQgfOslB3ygvvP5RVOQgxku1QR1wfPzQ6dIKzoIehgQQZI3yiv9FRo6WkEs0rcf7zjm1iptBkD0CdDAHl+lRkYO4FI1qoXnvNOecWgOTg24tlhwk+I3ySktFQg4OK+MNnNNznR6tYXBQ/8pBOwyvfxkFOYihYGxfTYIwIeg2p0drCEwOgg5exOVCw+eukkkFQ/ctc/gSk+kn4/n76dS/xHOZI7JcJWfXeNbAHYkHQBdfBuhhLi51ObLUD49PqabgWW8XzqFN0BNyhvKCXkHWYz0axtS2Pzs9WgHreDCKHbT4Rn3RiuwpZKj2kaFoqQ1Ty0EwG3of2Q0XZD24LsDFuR5Ol1ZA3R0mEdJiemDxuM+CyFAfnyMPDhe/0/Q9uEu/yunQGrSSg6CHN0yJUSo5iPPQoA6aBFnknFMrYEyJ/gQjp41tfEGpVYuZDMSipronRzJyehxkJ6fTkvGW8ore0oF8AvKa7UrIpfgcfrBm5cM6N+J7mPc4yelYG8uFBCREDUs/Rj5m1ZMcTHLtInsqgshBK8XIaTen962wScIEJMKTtA5xlsSWgyAH1rcYPrcynKc0sta5aogvPUc6oNzB2MRi3zCxQJKG4yLDNrgcpLzjVX6ivF2QFfW1HASrD7aXDb86DWFZo1PLjAzso0W+YeKZoOBVBITgLjuG4rmKOwCyfVgOqR87STBmhOb9DNoMybhzuj7vK8gw8aJM6+MkA2c0rHXaVq7MUd1BLEVDGz6HPxizr6TL6zR0FC7XZ4gMa4QENTJEvBZ3g8THaylEoNRVB4RWo79NcijpmP460ytpOAvCdE4pGV72WYWawjWJmMhQIc7+YaJwVi7kpmseBBRU25RHhu5pkxzEUHTUXZovQ7ZWp4AIG2WWVeObVm5IQsNkb/OhItxju0stt3EKPEMVz+/lMsdw5e22s0aOtZCOkk+g83KslHxSwsjwucwk8sPEIrzPpwkhw15ChIFy3VPzo9XiDBdDE/EbtwvTIfWD2WJMKbxK834eHfYzcY7iwn+VVy0xP0wsARm+SggZfigWIW8dSj3ilVZ6tfKirHWBub8PQI63ZTmILyAd0MFvaXYAE1KujbDP3/VZBcoy2+ezGpCBs4dDxDIcJj5ELqTHU/nT1ZZz6/2Wcq041dQZc4B/bcNyKDFLrF91oub93BtzhkXndFWB87gyKeOXBJ/6CBkoByh7p3Ry2GCQa7aQIE+Gdf5JhPyzsk3dbViO70wZvvRJzU6id/14CN/Jd1nmswpPlLJUbZEMdPx6ilU4VGYUjSJuRhX6ZGpAOzl8LbVJjucl9rFJs+PuNLA2eXwtMwk6WwxDLww6ESkGQnT2OZBJOGyHkdne6KdlAe0eapMcxEg0YppmJ9LzZvCo2LY/zhqe9g0Ti3VnRhGSobVvakkL0SyB03Oegs1c4M+L3WSbHFxZbK+TUigdy9D6+AInqsYnS2TbX5LI0NTnQJIQbVU6EHhype0jylnjgxt8dVPkGVJvo7yEWA4TLyftaG851bm/b6jootIJ1l5/FP17b1yWg2CEcVBQEmxSIauXfX0zCp6VUqGyAcZ4utcVdqiMoAH00MdBDkwJGSqFAPlIJKd126psgs7xHVzKqG24tk0OloN6g9NLrgOgASsSSAYGmbr5HEgGoXZU5YM+MvRfYXNY4ZT1XQmsULjg459J8G83JcGHwDu381kGyq6qvEHd8eTs6rAsB8Pki8VxpHQPCOgwn6CrOJtRk6G5z4HktaVy8IM+FKsH0f/4oBTLwenoQt+08hn/AhWeQ9N8bMAzuNQ9xXZWlCTI9ldbFqw6Ov1rgQtvQ/LWvZjlMF2gWiZOZ/Mi91BpvUiskMmwvdqyYDVQviPndG0MrpCzvMPkQsuxUn0/1W1lCUpqrbykkWJglvUN9VkWlwWr/cWBHCikbOh0GwoYXufu/RdIDq7f14S1QIXnMXkn6PSFx/B9NQbP5JjYQ22JRPZTtWRLO4QGLmPsF7rphSLp+Vep4oEiOrOTgmL7vmc2Ecu2i9NbZLgl9EifFI0LqgmWjzrqPpNrLJc7fUWKX9kKA3MJPcin6A+LYLJiOV2cXocI57ehQ7b2LSj4NR3GtuIzcJcV09EmGTyT4d1RTmXRwdp0Twrbcvm9s5CCmdOFJwBwpsTEkyUGz71HeeUcHCyjMkQykGjdfbGGASq4qAg/8yflrWvogjkfRypfCr1DAi2HrFHkYw1UcKlrFEfDejxg8L3cm3uZU1+CyOFbo8gTokVI7WChki66WV6yKZgrvM2dCmMiR8RrFOeAHDcaEJXBttlOhRGRQ9Yo+qktq5c9VXRZT8w3bQeCfGzg43Ah8CCnRkvkkJLVeTIcpOJdo7gG5BhjYD32U97xpW6RzRI5kpTAy7A6M8bWGhDkVlxOd6oMH0lLlOX0dJzhZ1jG8hOnyuyTgzhZhgstwMqsw2WsU2V5kIP+g+mue4bhX3fqzD45iEOCzjMrsB5c5LvQqbM8yEGMlz0kugT5Gy7znUrLgxzMJjvb8DMXQL5xas0+OYgrZW+qrvXgoXfu8J8yIceuKuAs91pwtfKirQ4ZJwcxCtajlYH14ObgK5xqy4McDIz9wfAzTCl8zqk3++QgTANj3Hx1nlNvyaBT/0ia6kwYBcZAEK7Y3uH0rI2NEgpgqetm6L/Dk7bwFoSfo9FzdW+WOmNMCnIboGoHLWw1ZA7kvsJjUdJGDobIO+ucDOUjyJgSfJYsg/qmVb2bImtTtaIyZS/G+pgMjE02+MxEMZVtypwUi2WYnQNC/EfnA2mzHATrR7STKauu9TgGl/vLkBCsZnCXEOIt0w9XpvCFWSyeQ8UlBs7pXBDk78o7lSjrWCo+BAmxqj4PSqPl2GwMlHd0x2oD69FJeVWFGmSQEC/5fIjlYT20MqWdwfoc3E13vIH1eAUE4bpLVrZULhdC3G7r2LC0Wo48+qFjFhhYj51lartbSt+XlRlvFwthfVN52snBPba9TSoU4n05c5meMkLkfYglUX5xpUo3eDguz6idafAZZqvzsJleCX6vtXlCKK/4fyz/wLQcrBXaKMUE4Zy9vcnpCXhnFmZdmLD3eAdyr8QiFsVZr1V2Og6plM7dO8XkaK7MzpWjc/oUOmCWiv9kbOad3COEWBjncWJS453VBE+GHAFZQ8vB3e1HpXx4odXgZqh/G3RGM3FOoz4ZmyWs7hNCVMd5UrUU4uNe6FMgvyjoiwcqxbymnRxcWLsGMszAeqxD5zApaFIE7eP+33ky0/iHydqQJVJ0FwvBzeh1HT+6iJaDTt2zGZj3c4zeHx3/rEEnVcqMp5uF9vBUKWbEM3z9ENr1ZcyEaCFkICm6anykZ04+yCBKhwwQhON2X8NO4/01IX0/9/o+JLOMeXEfMSbJ2ccLITh86G44X4G2d8iTg1HD61U2cAJebI5hJ86sh3O6OWtKedHKebpHllkkBM+GOVwIcbTyosmmOB/vMTlPjkYSbNk9A+TgeksnvNwXFp1TzioekyHj/rjPtpdaJX3FsaSlaBJGaCDn+wI+eFZGrMdleLlxhh3MqstTAnwaOu+sJrRV1lRMpOgkhKAv0Sqkx56Gd9scVMwVsG9eBmYu+aktj0x/2/C/b6Z0th9MkuGZt3frJslYJgTjOkOlnT1DfvyDeMfv9F9Y9omRMSaItM0AQe7Ei/7SsOO5nH+uOG+sGHR7KUkyFgjBY8WOFUKwApONxPBVMtvbUCs5pCHtxHw2zQBBtI9MTxqgB5bfGiSOMisO2Ky7yuDhgMJjVHJ1NIwEmZ8BC/KC8o5M35gSQlAfB4qFOEFFc/YcLcbg2s7XyRVpKIeYGRnwQarw4lMTTop9ZOpJiXKdi0G64f5z3bTI4WMyGzwhxdPcDTI125AwQjT1OZa9I/56rgCPRp/MKHZTTvNFGAcZobw8iDRGUqeiI6oSQAhWXj5GCMFk56jzWRnLYarkreiPT4NuzpXwgvvKix0M+ZHylsyTng/CoFUvnlsWAyEaSH+dIsRoHNFXfyGO5qsyweC59UtNHvB/AQYAJxSvvrFB3mUAAAAASUVORK5CYII=" alt="Laravel PHP Framework"></a>
		<h1>You have arrived.</h1>
	</div>
</body>

<script>
	/**************************************************************************
	 * jquery.themepunch.revolution.js - jQuery Plugin for Revolution Slider
	 * @version: 4.6.0 (15.07.2013)
	 * @requires jQuery v1.7 or later (tested on 1.9)
	 * @author ThemePunch
	 **************************************************************************/
	function revslider_showDoubleJqueryError(e) {
		var t = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
		t += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
		t += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
		t += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
		t = "<span style='font-size:16px;color:#BC0C06;'>" + t + "</span>";
		jQuery(e).show().html(t)
	}(function(e, t) {
		function n(n, i) {
			if (i.navigationStyle == "preview1" || i.navigationStyle == "preview3" || i.navigationStyle == "preview4") {
				i.soloArrowLeftHalign = "left";
				i.soloArrowLeftValign = "center";
				i.soloArrowLeftHOffset = 0;
				i.soloArrowLeftVOffset = 0;
				i.soloArrowRightHalign = "right";
				i.soloArrowRightValign = "center";
				i.soloArrowRightHOffset = 0;
				i.soloArrowRightVOffset = 0;
				i.navigationArrows = "solo"
			}
			i.desktop = !navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i);
			if (i.fullWidth != "on" && i.fullScreen != "on") i.autoHeight = "off";
			if (i.fullScreen == "on") i.autoHeight = "on";
			if (i.fullWidth != "on" && i.fullScreen != "on") forceFulWidth = "off";
			if (i.fullWidth == "on" && i.autoHeight == "off") n.css({
				maxHeight: i.startheight + "px"
			});
			if ($() && i.hideThumbsOnMobile == "on" && i.navigationType == "thumb") i.navigationType = "none";
			if ($() && i.hideBulletsOnMobile == "on" && i.navigationType == "bullet") i.navigationType = "none";
			if ($() && i.hideBulletsOnMobile == "on" && i.navigationType == "both") i.navigationType = "none";
			if ($() && i.hideArrowsOnMobile == "on") i.navigationArrows = "none";
			if (i.forceFullWidth == "on" && n.closest(".forcefullwidth_wrapper_tp_banner").length == 0) {
				var o = n.parent().offset().left;
				var u = n.parent().css("marginBottom");
				var p = n.parent().css("marginTop");
				if (u == t) u = 0;
				if (p == t) p = 0;
				n.parent().wrap('<div style="position:relative;width:100%;height:auto;margin-top:' + p + ";margin-bottom:" + u + '" class="forcefullwidth_wrapper_tp_banner"></div>');
				n.closest(".forcefullwidth_wrapper_tp_banner").append('<div class="tp-fullwidth-forcer" style="width:100%;height:' + n.height() + 'px"></div>');
				n.css({
					backgroundColor: n.parent().css("backgroundColor"),
					backgroundImage: n.parent().css("backgroundImage")
				});
				n.parent().css({
					left: 0 - o + "px",
					position: "absolute",
					width: e(window).width()
				});
				i.width = e(window).width()
			}
			try {
				if (i.hideThumbsUnderResolution > e(window).width() && i.hideThumbsUnderResolution != 0) {
					n.parent().find(".tp-bullets.tp-thumbs").css({
						display: "none"
					})
				} else {
					n.parent().find(".tp-bullets.tp-thumbs").css({
						display: "block"
					})
				}
			} catch (d) {}
			if (!n.hasClass("revslider-initialised")) {
				n.addClass("revslider-initialised");
				if (n.attr("id") == t) n.attr("id", "revslider-" + Math.round(Math.random() * 1e3 + 5));
				i.firefox13 = false;
				i.ie = !e.support.opacity;
				i.ie9 = document.documentMode == 9;
				i.origcd = i.delay;
				var v = e.fn.jquery.split("."),
					g = parseFloat(v[0]),
					y = parseFloat(v[1]),
					b = parseFloat(v[2] || "0");
				if (g == 1 && y < 7) {
					n.html('<div style="text-align:center; padding:40px 0px; font-size:20px; color:#992222;"> The Current Version of jQuery:' + v + " <br>Please update your jQuery Version to min. 1.7 in Case you wish to use the Revolution Slider Plugin</div>")
				}
				if (g > 1) i.ie = false;
				if (!e.support.transition) e.fn.transition = e.fn.animate;
				n.find(".caption").each(function() {
					e(this).addClass("tp-caption")
				});
				if ($()) {
					n.find(".tp-caption").each(function() {
						if (e(this).data("autoplay") == true) e(this).data("autoplay", false)
					})
				}
				var w = 0;
				var E = 0;
				var S = 0;
				var x = "http";
				if (location.protocol === "https:") {
					x = "https"
				}
				n.find(".tp-caption iframe").each(function(t) {
					try {
						if (e(this).attr("src").indexOf("you") > 0 && w == 0) {
							w = 1;
							var n = document.createElement("script");
							var r = "https";
							n.src = r + "://www.youtube.com/iframe_api";
							var i = document.getElementsByTagName("script")[0];
							var s = true;
							e("head").find("*").each(function() {
								if (e(this).attr("src") == r + "://www.youtube.com/iframe_api") s = false
							});
							if (s) {
								i.parentNode.insertBefore(n, i)
							}
						}
					} catch (o) {}
				});
				n.find(".tp-caption iframe").each(function(t) {
					try {
						if (e(this).attr("src").indexOf("vim") > 0 && E == 0) {
							E = 1;
							var n = document.createElement("script");
							n.src = x + "://a.vimeocdn.com/js/froogaloop2.min.js";
							var r = document.getElementsByTagName("script")[0];
							var i = true;
							e("head").find("*").each(function() {
								if (e(this).attr("src") == x + "://a.vimeocdn.com/js/froogaloop2.min.js") i = false
							});
							if (i) r.parentNode.insertBefore(n, r)
						}
					} catch (s) {}
				});
				n.find(".tp-caption video").each(function(t) {
					e(this).removeClass("video-js").removeClass("vjs-default-skin");
					e(this).attr("preload", "");
					e(this).css({
						display: "none"
					})
				});
				if (i.shuffle == "on") {
					for (var N = 0; N < n.find(">ul:first-child >li").length; N++) {
						var C = Math.round(Math.random() * n.find(">ul:first-child >li").length);
						n.find(">ul:first-child >li:eq(" + C + ")").prependTo(n.find(">ul:first-child"))
					}
				}
				i.slots = 4;
				i.act = -1;
				i.next = 0;
				if (i.startWithSlide != t) i.next = i.startWithSlide;
				var k = r("#")[0];
				if (k.length < 9) {
					if (k.split("slide").length > 1) {
						var L = parseInt(k.split("slide")[1], 0);
						if (L < 1) L = 1;
						if (L > n.find(">ul:first >li").length) L = n.find(">ul:first >li").length;
						i.next = L - 1
					}
				}
				i.firststart = 1;
				if (i.navigationHOffset == t) i.navOffsetHorizontal = 0;
				if (i.navigationVOffset == t) i.navOffsetVertical = 0;
				n.append('<div class="tp-loader ' + i.spinner + '">' + '<div class="dot1"></div>' + '<div class="dot2"></div>' + '<div class="bounce1"></div>' + '<div class="bounce2"></div>' + '<div class="bounce3"></div>' + "</div>");
				if (n.find(".tp-bannertimer").length == 0) n.append('<div class="tp-bannertimer" style="visibility:hidden"></div>');
				var A = n.find(".tp-bannertimer");
				if (A.length > 0) {
					A.css({
						width: "0%"
					})
				}
				n.addClass("tp-simpleresponsive");
				i.container = n;
				i.slideamount = n.find(">ul:first >li").length;
				if (n.height() == 0) n.height(i.startheight);
				if (i.startwidth == t || i.startwidth == 0) i.startwidth = n.width();
				if (i.startheight == t || i.startheight == 0) i.startheight = n.height();
				i.width = n.width();
				i.height = n.height();
				i.bw = i.startwidth / n.width();
				i.bh = i.startheight / n.height();
				if (i.width != i.startwidth) {
					i.height = Math.round(i.startheight * (i.width / i.startwidth));
					n.height(i.height)
				}
				if (i.shadow != 0) {
					n.parent().append('<div class="tp-bannershadow tp-shadow' + i.shadow + '"></div>');
					var o = 0;
					if (i.forceFullWidth == "on") o = 0 - i.container.parent().offset().left;
					n.parent().find(".tp-bannershadow").css({
						width: i.width,
						left: o
					})
				}
				n.find("ul").css({
					display: "none"
				});
				var O = n;
				n.find("ul").css({
					display: "block"
				});
				m(n, i);
				if (i.parallax != "off") Z(n, i);
				if (i.slideamount > 1) a(n, i);
				if (i.slideamount > 1 && i.navigationType == "thumb") tt(n, i);
				if (i.slideamount > 1) f(n, i);
				if (i.keyboardNavigation == "on") l(n, i);
				try {
					c(n, i)
				} catch (d) {}
				if (i.hideThumbs > 0) h(n, i);
				T(n, i);
				if (i.slideamount > 1) V(n, i);
				setTimeout(function() {
					n.trigger("revolution.slide.onloaded")
				}, 500);
				e("body").data("rs-fullScreenMode", false);
				e(window).on("mozfullscreenchange webkitfullscreenchange fullscreenchange", function() {
					e("body").data("rs-fullScreenMode", !e("body").data("rs-fullScreenMode"));
					if (e("body").data("rs-fullScreenMode")) {
						setTimeout(function() {
							e(window).trigger("resize")
						}, 200)
					}
				});
				e(window).resize(function() {
					if (e("body").find(n) != 0)
						if (i.forceFullWidth == "on") {
							var t = i.container.closest(".forcefullwidth_wrapper_tp_banner").offset().left;
							i.container.parent().css({
								left: 0 - t + "px",
								width: e(window).width()
							})
						}
					if (n.outerWidth(true) != i.width || n.is(":hidden")) {
						s(n, i)
					}
				});
				try {
					if (i.hideThumbsUnderResoluition != 0 && i.navigationType == "thumb") {
						if (i.hideThumbsUnderResoluition > e(window).width()) e(".tp-bullets").css({
							display: "none"
						});
						else e(".tp-bullets").css({
							display: "block"
						})
					}
				} catch (d) {}
				n.find(".tp-scrollbelowslider").on("click", function() {
					var t = 0;
					try {
						t = e("body").find(i.fullScreenOffsetContainer).height()
					} catch (r) {}
					try {
						t = t - e(this).data("scrolloffset")
					} catch (r) {}
					e("body,html").animate({
						scrollTop: n.offset().top + n.find(">ul >li").height() - t + "px"
					}, {
						duration: 400
					})
				});
				var M = n.parent();
				if (e(window).width() < i.hideSliderAtLimit) {
					n.trigger("stoptimer");
					if (M.css("display") != "none") M.data("olddisplay", M.css("display"));
					M.css({
						display: "none"
					})
				}
			}
		}
		e.fn.extend({
			revolution: function(r) {
				defaults = {
					delay: 9e3,
					startheight: 500,
					startwidth: 960,
					fullScreenAlignForce: "off",
					autoHeight: "off",
					hideTimerBar: "off",
					hideThumbs: 200,
					hideNavDelayOnMobile: 1500,
					thumbWidth: 100,
					thumbHeight: 50,
					thumbAmount: 3,
					navigationType: "bullet",
					navigationArrows: "solo",
					navigationInGrid: "off",
					hideThumbsOnMobile: "off",
					hideBulletsOnMobile: "off",
					hideArrowsOnMobile: "off",
					hideThumbsUnderResoluition: 0,
					navigationStyle: "round",
					navigationHAlign: "center",
					navigationVAlign: "bottom",
					navigationHOffset: 0,
					navigationVOffset: 20,
					soloArrowLeftHalign: "left",
					soloArrowLeftValign: "center",
					soloArrowLeftHOffset: 20,
					soloArrowLeftVOffset: 0,
					soloArrowRightHalign: "right",
					soloArrowRightValign: "center",
					soloArrowRightHOffset: 20,
					soloArrowRightVOffset: 0,
					keyboardNavigation: "on",
					touchenabled: "on",
					onHoverStop: "on",
					stopAtSlide: -1,
					stopAfterLoops: -1,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLimit: 0,
					hideSliderAtLimit: 0,
					shadow: 0,
					fullWidth: "off",
					fullScreen: "off",
					minFullScreenHeight: 0,
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0",
					dottedOverlay: "none",
					forceFullWidth: "off",
					spinner: "spinner0",
					swipe_velocity: .4,
					swipe_max_touches: 1,
					swipe_min_touches: 1,
					drag_block_vertical: false,
					isJoomla: false,
					parallax: "off",
					parallaxLevels: [10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
					parallaxBgFreeze: "off",
					parallaxOpacity: "on",
					parallaxDisableOnMobile: "off"
				};
				r = e.extend({}, defaults, r);
				return this.each(function() {
					try {
						console.groupCollapsed("Slider Revolution 4.5.7 Initialisation on " + e(this).attr("id"));
						console.groupCollapsed("Used Options:");
						console.info(r);
						console.groupEnd();
						console.groupCollapsed("Tween Engine:")
					} catch (i) {}
					if (punchgs.TweenLite == t) {
						try {
							console.error("GreenSock Engine Does not Exist!")
						} catch (i) {}
						return false
					}
					punchgs.force3D = true;
					try {
						console.info("GreenSock Engine Version in Slider Revolution:" + punchgs.TweenLite.version)
					} catch (i) {}
					punchgs.TweenLite.lagSmoothing(1e3, 16);
					punchgs.force3D = "true";
					n(e(this), r);
					try {
						console.groupEnd();
						console.groupEnd()
					} catch (i) {}
				})
			},
			revscroll: function(t) {
				return this.each(function() {
					var n = e(this);
					e("body,html").animate({
						scrollTop: n.offset().top + n.find(">ul >li").height() - t + "px"
					}, {
						duration: 400
					})
				})
			},
			revredraw: function(t) {
				return this.each(function() {
					var t = e(this);
					var n = t.parent().find(".tp-bannertimer");
					var r = n.data("opt");
					s(t, r)
				})
			},
			revpause: function(t) {
				return this.each(function() {
					var t = e(this);
					t.data("conthover", 1);
					t.data("conthover-changed", 1);
					t.trigger("revolution.slide.onpause");
					var n = t.parent().find(".tp-bannertimer");
					var r = n.data("opt");
					r.bannertimeronpause = true;
					t.trigger("stoptimer")
				})
			},
			revresume: function(t) {
				return this.each(function() {
					var t = e(this);
					t.data("conthover", 0);
					t.data("conthover-changed", 1);
					t.trigger("revolution.slide.onresume");
					var n = t.parent().find(".tp-bannertimer");
					var r = n.data("opt");
					r.bannertimeronpause = false;
					t.trigger("starttimer")
				})
			},
			revnext: function(t) {
				return this.each(function() {
					var t = e(this);
					t.parent().find(".tp-rightarrow").click()
				})
			},
			revprev: function(t) {
				return this.each(function() {
					var t = e(this);
					t.parent().find(".tp-leftarrow").click()
				})
			},
			revmaxslide: function(t) {
				return e(this).find(">ul:first-child >li").length
			},
			revcurrentslide: function(t) {
				var n = e(this);
				var r = n.parent().find(".tp-bannertimer");
				var i = r.data("opt");
				return i.act
			},
			revlastslide: function(t) {
				var n = e(this);
				var r = n.parent().find(".tp-bannertimer");
				var i = r.data("opt");
				return i.lastslide
			},
			revshowslide: function(t) {
				return this.each(function() {
					var n = e(this);
					n.data("showus", t);
					n.parent().find(".tp-rightarrow").click()
				})
			}
		});
		var r = function(e) {
			var t = [],
				n;
			var r = window.location.href.slice(window.location.href.indexOf(e) + 1).split("_");
			for (var i = 0; i < r.length; i++) {
				r[i] = r[i].replace("%3D", "=");
				n = r[i].split("=");
				t.push(n[0]);
				t[n[0]] = n[1]
			}
			return t
		};
		var s = function(n, r) {
			try {
				if (r.hideThumbsUnderResoluition != 0 && r.navigationType == "thumb") {
					if (r.hideThumbsUnderResoluition > e(window).width()) e(".tp-bullets").css({
						display: "none"
					});
					else e(".tp-bullets").css({
						display: "block"
					})
				}
			} catch (i) {}
			n.find(".defaultimg").each(function(t) {
				v(e(this), r)
			});
			var o = n.parent();
			if (e(window).width() < r.hideSliderAtLimit) {
				n.trigger("stoptimer");
				if (o.css("display") != "none") o.data("olddisplay", o.css("display"));
				o.css({
					display: "none"
				})
			} else {
				if (n.is(":hidden")) {
					if (o.data("olddisplay") != t && o.data("olddisplay") != "undefined" && o.data("olddisplay") != "none") o.css({
						display: o.data("olddisplay")
					});
					else o.css({
						display: "block"
					});
					n.trigger("restarttimer");
					setTimeout(function() {
						s(n, r)
					}, 150)
				}
			}
			var u = 0;
			if (r.forceFullWidth == "on") u = 0 - r.container.parent().offset().left;
			try {
				n.parent().find(".tp-bannershadow").css({
					width: r.width,
					left: u
				})
			} catch (i) {}
			var a = n.find(">ul >li:eq(" + r.act + ") .slotholder");
			var f = n.find(">ul >li:eq(" + r.next + ") .slotholder");
			w(n, r, n);
			punchgs.TweenLite.set(f.find(".defaultimg"), {
				opacity: 0
			});
			a.find(".defaultimg").css({
				opacity: 1
			});
			f.find(".defaultimg").each(function() {
				var i = e(this);
				if (i.data("kenburn") != t) {
					i.data("kenburn").restart();
					K(n, r, true)
				}
			});
			var l = n.find(">ul >li:eq(" + r.next + ")");
			var c = n.parent().find(".tparrows");
			if (c.hasClass("preview2")) c.css({
				width: parseInt(c.css("minWidth"), 0)
			});
			B(l, r, true);
			p(n, r)
		};
		var o = function(t, n) {
			var r = e('<div style="display:none;"/>').appendTo(e("body"));
			r.html("<!--[if " + (n || "") + " IE " + (t || "") + "]><a>&nbsp;</a><![endif]-->");
			var i = r.find("a").length;
			r.remove();
			return i
		};
		var u = function(e, t) {
			T(t, e)
		};
		var a = function(t, n) {
			var r = "hidebullets";
			if (n.hideThumbs == 0) r = "";
			if (n.navigationType == "bullet" || n.navigationType == "both") {
				t.parent().append('<div class="tp-bullets ' + r + " simplebullets " + n.navigationStyle + '"></div>')
			}
			var i = t.parent().find(".tp-bullets");
			t.find(">ul:first >li").each(function(e) {
				var n = t.find(">ul:first >li:eq(" + e + ") img:first").attr("src");
				i.append('<div class="bullet"></div>');
				var r = i.find(".bullet:first")
			});
			i.find(".bullet").each(function(r) {
				var i = e(this);
				if (r == n.slideamount - 1) i.addClass("last");
				if (r == 0) i.addClass("first");
				i.click(function() {
					var e = false;
					if (n.navigationArrows == "withbullet" || n.navigationArrows == "nexttobullets") {
						if (i.index() - 1 == n.act) e = true
					} else {
						if (i.index() == n.act) e = true
					}
					if (n.transition == 0 && !e) {
						if (n.navigationArrows == "withbullet" || n.navigationArrows == "nexttobullets") {
							n.next = i.index() - 1
						} else {
							n.next = i.index()
						}
						u(n, t)
					}
				})
			});
			i.append('<div class="tpclear"></div>');
			p(t, n)
		};
		var f = function(e, n) {
			function a(t) {
				e.parent().append('<div style="' + i + '" class="tp-' + t + "arrow " + s + " tparrows " + o + '"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder"></div><div class="tp-arr-imgholder2"></div><div class="tp-arr-titleholder"></div><div class="tp-arr-subtitleholder"></div></div></div></div>')
			}
			var r = e.find(".tp-bullets");
			var i = "",
				s = "hidearrows";
			if (n.hideThumbs == 0) s = "";
			var o = n.navigationStyle;
			if (n.navigationArrows == "none") i = "visibility:hidden;display:none";
			n.soloArrowStyle = "default" + " " + n.navigationStyle;
			if (n.navigationArrows != "none" && n.navigationArrows != "nexttobullets") o = n.soloArrowStyle;
			a("left");
			a("right");
			e.parent().find(".tp-rightarrow").click(function() {
				if (n.transition == 0) {
					if (e.data("showus") != t && e.data("showus") != -1) n.next = e.data("showus") - 1;
					else n.next = n.next + 1;
					e.data("showus", -1);
					if (n.next >= n.slideamount) n.next = 0;
					if (n.next < 0) n.next = 0;
					if (n.act != n.next) u(n, e)
				}
			});
			e.parent().find(".tp-leftarrow").click(function() {
				if (n.transition == 0) {
					n.next = n.next - 1;
					n.leftarrowpressed = 1;
					if (n.next < 0) n.next = n.slideamount - 1;
					u(n, e)
				}
			});
			p(e, n)
		};
		var l = function(n, r) {
			e(document).keydown(function(e) {
				if (r.transition == 0 && e.keyCode == 39) {
					if (n.data("showus") != t && n.data("showus") != -1) r.next = n.data("showus") - 1;
					else r.next = r.next + 1;
					n.data("showus", -1);
					if (r.next >= r.slideamount) r.next = 0;
					if (r.next < 0) r.next = 0;
					if (r.act != r.next) u(r, n)
				}
				if (r.transition == 0 && e.keyCode == 37) {
					r.next = r.next - 1;
					r.leftarrowpressed = 1;
					if (r.next < 0) r.next = r.slideamount - 1;
					u(r, n)
				}
			});
			p(n, r)
		};
		var c = function(t, n) {
			if (n.touchenabled == "on") {
				try {
					var r = Hammer(t, {
						drag_block_vertical: n.drag_block_vertical,
						drag_lock_to_axis: true,
						swipe_velocity: n.swipe_velocity,
						swipe_max_touches: n.swipe_max_touches,
						swipe_min_touches: n.swipe_min_touches,
						prevent_default: false
					});
					r.on("swipeleft", function() {
						if (n.transition == 0) {
							n.next = n.next + 1;
							if (n.next == n.slideamount) n.next = 0;
							u(n, t)
						}
					});
					r.on("swiperight", function() {
						if (n.transition == 0) {
							n.next = n.next - 1;
							n.leftarrowpressed = 1;
							if (n.next < 0) n.next = n.slideamount - 1;
							u(n, t)
						}
					});
					r.on("swipeup", function() {
						e("html, body").animate({
							scrollTop: t.offset().top + t.height() + "px"
						})
					});
					r.on("swipedown", function() {
						e("html, body").animate({
							scrollTop: t.offset().top - e(window).height() + "px"
						})
					})
				} catch (i) {}
			}
		};
		var h = function(e, t) {
			var n = e.parent().find(".tp-bullets");
			var r = e.parent().find(".tparrows");
			if (n == null) {
				e.append('<div class=".tp-bullets"></div>');
				var n = e.parent().find(".tp-bullets")
			}
			if (r == null) {
				e.append('<div class=".tparrows"></div>');
				var r = e.parent().find(".tparrows")
			}
			e.data("hideThumbs", t.hideThumbs);
			n.addClass("hidebullets");
			r.addClass("hidearrows");
			if ($()) {
				try {
					e.hammer().on("touch", function() {
						e.addClass("hovered");
						if (t.onHoverStop == "on") e.trigger("stoptimer");
						clearTimeout(e.data("hideThumbs"));
						n.removeClass("hidebullets");
						r.removeClass("hidearrows")
					});
					e.hammer().on("release", function() {
						e.removeClass("hovered");
						e.trigger("playtimer");
						if (!e.hasClass("hovered") && !n.hasClass("hovered")) e.data("hideThumbs", setTimeout(function() {
							n.addClass("hidebullets");
							r.addClass("hidearrows");
							e.trigger("playtimer")
						}, t.hideNavDelayOnMobile))
					})
				} catch (i) {}
			} else {
				n.hover(function() {
					t.overnav = true;
					if (t.onHoverStop == "on") e.trigger("stoptimer");
					n.addClass("hovered");
					clearTimeout(e.data("hideThumbs"));
					n.removeClass("hidebullets");
					r.removeClass("hidearrows")
				}, function() {
					t.overnav = false;
					e.trigger("playtimer");
					n.removeClass("hovered");
					if (!e.hasClass("hovered") && !n.hasClass("hovered")) e.data("hideThumbs", setTimeout(function() {
						n.addClass("hidebullets");
						r.addClass("hidearrows")
					}, t.hideThumbs))
				});
				r.hover(function() {
					t.overnav = true;
					if (t.onHoverStop == "on") e.trigger("stoptimer");
					n.addClass("hovered");
					clearTimeout(e.data("hideThumbs"));
					n.removeClass("hidebullets");
					r.removeClass("hidearrows")
				}, function() {
					t.overnav = false;
					e.trigger("playtimer");
					n.removeClass("hovered")
				});
				e.on("mouseenter", function() {
					e.addClass("hovered");
					if (t.onHoverStop == "on") e.trigger("stoptimer");
					clearTimeout(e.data("hideThumbs"));
					n.removeClass("hidebullets");
					r.removeClass("hidearrows")
				});
				e.on("mouseleave", function() {
					e.removeClass("hovered");
					e.trigger("playtimer");
					if (!e.hasClass("hovered") && !n.hasClass("hovered")) e.data("hideThumbs", setTimeout(function() {
						n.addClass("hidebullets");
						r.addClass("hidearrows")
					}, t.hideThumbs))
				})
			}
		};
		var p = function(t, n) {
			var r = t.parent();
			var i = r.find(".tp-bullets");
			if (n.navigationType == "thumb") {
				i.find(".thumb").each(function(t) {
					var r = e(this);
					r.css({
						width: n.thumbWidth * n.bw + "px",
						height: n.thumbHeight * n.bh + "px"
					})
				});
				var s = i.find(".tp-mask");
				s.width(n.thumbWidth * n.thumbAmount * n.bw);
				s.height(n.thumbHeight * n.bh);
				s.parent().width(n.thumbWidth * n.thumbAmount * n.bw);
				s.parent().height(n.thumbHeight * n.bh)
			}
			var o = r.find(".tp-leftarrow");
			var u = r.find(".tp-rightarrow");
			if (n.navigationType == "thumb" && n.navigationArrows == "nexttobullets") n.navigationArrows = "solo";
			if (n.navigationArrows == "nexttobullets") {
				o.prependTo(i).css({
					"float": "left"
				});
				u.insertBefore(i.find(".tpclear")).css({
					"float": "left"
				})
			}
			var a = 0;
			if (n.forceFullWidth == "on") a = 0 - n.container.parent().offset().left;
			var f = 0,
				l = 0;
			if (n.navigationInGrid == "on") {
				f = t.width() > n.startwidth ? (t.width() - n.startwidth) / 2 : 0, l = t.height() > n.startheight ? (t.height() - n.startheight) / 2 : 0
			}
			if (n.navigationArrows != "none" && n.navigationArrows != "nexttobullets") {
				o.css({
					position: "absolute"
				});
				u.css({
					position: "absolute"
				});
				if (n.soloArrowLeftValign == "center") o.css({
					top: "50%",
					marginTop: n.soloArrowLeftVOffset - Math.round(o.innerHeight() / 2) + "px"
				});
				if (n.soloArrowLeftValign == "bottom") o.css({
					top: "auto",
					bottom: 0 + n.soloArrowLeftVOffset + "px"
				});
				if (n.soloArrowLeftValign == "top") o.css({
					bottom: "auto",
					top: 0 + n.soloArrowLeftVOffset + "px"
				});
				if (n.soloArrowLeftHalign == "center") o.css({
					left: "50%",
					marginLeft: a + n.soloArrowLeftHOffset - Math.round(o.innerWidth() / 2) + "px"
				});
				if (n.soloArrowLeftHalign == "left") o.css({
					left: f + n.soloArrowLeftHOffset + a + "px"
				});
				if (n.soloArrowLeftHalign == "right") o.css({
					right: f + n.soloArrowLeftHOffset - a + "px"
				});
				if (n.soloArrowRightValign == "center") u.css({
					top: "50%",
					marginTop: n.soloArrowRightVOffset - Math.round(u.innerHeight() / 2) + "px"
				});
				if (n.soloArrowRightValign == "bottom") u.css({
					top: "auto",
					bottom: 0 + n.soloArrowRightVOffset + "px"
				});
				if (n.soloArrowRightValign == "top") u.css({
					bottom: "auto",
					top: 0 + n.soloArrowRightVOffset + "px"
				});
				if (n.soloArrowRightHalign == "center") u.css({
					left: "50%",
					marginLeft: a + n.soloArrowRightHOffset - Math.round(u.innerWidth() / 2) + "px"
				});
				if (n.soloArrowRightHalign == "left") u.css({
					left: f + n.soloArrowRightHOffset + a + "px"
				});
				if (n.soloArrowRightHalign == "right") u.css({
					right: f + n.soloArrowRightHOffset - a + "px"
				});
				if (o.position() != null) o.css({
					top: Math.round(parseInt(o.position().top, 0)) + "px"
				});
				if (u.position() != null) u.css({
					top: Math.round(parseInt(u.position().top, 0)) + "px"
				})
			}
			if (n.navigationArrows == "none") {
				o.css({
					visibility: "hidden"
				});
				u.css({
					visibility: "hidden"
				})
			}
			if (n.navigationVAlign == "center") i.css({
				top: "50%",
				marginTop: n.navigationVOffset - Math.round(i.innerHeight() / 2) + "px"
			});
			if (n.navigationVAlign == "bottom") i.css({
				bottom: 0 + n.navigationVOffset + "px"
			});
			if (n.navigationVAlign == "top") i.css({
				top: 0 + n.navigationVOffset + "px"
			});
			if (n.navigationHAlign == "center") i.css({
				left: "50%",
				marginLeft: a + n.navigationHOffset - Math.round(i.innerWidth() / 2) + "px"
			});
			if (n.navigationHAlign == "left") i.css({
				left: 0 + n.navigationHOffset + a + "px"
			});
			if (n.navigationHAlign == "right") i.css({
				right: 0 + n.navigationHOffset - a + "px"
			})
		};
		var d = function(n) {
			var r = n.container;
			n.beforli = n.next - 1;
			n.comingli = n.next + 1;
			if (n.beforli < 0) n.beforli = n.slideamount - 1;
			if (n.comingli >= n.slideamount) n.comingli = 0;
			var i = r.find(">ul:first-child >li:eq(" + n.comingli + ")"),
				s = r.find(">ul:first-child >li:eq(" + n.beforli + ")"),
				o = s.find(".defaultimg").attr("src"),
				u = i.find(".defaultimg").attr("src");
			if (n.arr == t) {
				n.arr = r.parent().find(".tparrows"), n.rar = r.parent().find(".tp-rightarrow"), n.lar = r.parent().find(".tp-leftarrow"), n.raimg = n.rar.find(".tp-arr-imgholder"), n.laimg = n.lar.find(".tp-arr-imgholder"), n.raimg_b = n.rar.find(".tp-arr-imgholder2"), n.laimg_b = n.lar.find(".tp-arr-imgholder2"), n.ratit = n.rar.find(".tp-arr-titleholder"), n.latit = n.lar.find(".tp-arr-titleholder")
			}
			var a = n.arr,
				f = n.rar,
				l = n.lar,
				c = n.raimg,
				h = n.laimg,
				p = n.raimg_b,
				d = n.laimg_b,
				v = n.ratit,
				m = n.latit;
			if (i.data("title") != t) v.html(i.data("title"));
			if (s.data("title") != t) m.html(s.data("title"));
			if (f.hasClass("itishovered")) {
				f.width(v.outerWidth(true) + parseInt(f.css("minWidth"), 0))
			}
			if (l.hasClass("itishovered")) {
				l.width(m.outerWidth(true) + parseInt(l.css("minWidth"), 0))
			}
			if (a.hasClass("preview2") && !a.hasClass("hashoveralready")) {
				a.addClass("hashoveralready");
				if (!$()) a.hover(function() {
					var t = e(this),
						n = t.find(".tp-arr-titleholder");
					t.width(n.outerWidth(true) + parseInt(t.css("minWidth"), 0));
					t.addClass("itishovered")
				}, function() {
					var t = e(this),
						n = t.find(".tp-arr-titleholder");
					t.css({
						width: parseInt(t.css("minWidth"), 0)
					});
					t.removeClass("itishovered")
				});
				else {
					var a = e(this),
						g = a.find(".tp-arr-titleholder");
					g.addClass("alwayshidden");
					punchgs.TweenLite.set(g, {
						autoAlpha: 0
					})
				}
			}
			if (s.data("thumb") != t) o = s.data("thumb");
			if (i.data("thumb") != t) u = i.data("thumb");
			if (!a.hasClass("preview4")) {
				punchgs.TweenLite.to(c, .5, {
					autoAlpha: 0,
					onComplete: function() {
						c.css({
							backgroundImage: "url(" + u + ")"
						});
						h.css({
							backgroundImage: "url(" + o + ")"
						})
					}
				});
				punchgs.TweenLite.to(h, .5, {
					autoAlpha: 0,
					onComplete: function() {
						punchgs.TweenLite.to(c, .5, {
							autoAlpha: 1,
							delay: .2
						});
						punchgs.TweenLite.to(h, .5, {
							autoAlpha: 1,
							delay: .2
						})
					}
				})
			} else {
				p.css({
					backgroundImage: "url(" + u + ")"
				});
				d.css({
					backgroundImage: "url(" + o + ")"
				});
				punchgs.TweenLite.fromTo(p, .8, {
					force3D: punchgs.force3d,
					x: 0
				}, {
					x: -c.width(),
					ease: punchgs.Power3.easeOut,
					delay: 1,
					onComplete: function() {
						c.css({
							backgroundImage: "url(" + u + ")"
						});
						punchgs.TweenLite.set(p, {
							x: 0
						})
					}
				});
				punchgs.TweenLite.fromTo(d, .8, {
					force3D: punchgs.force3d,
					x: 0
				}, {
					x: c.width(),
					ease: punchgs.Power3.easeOut,
					delay: 1,
					onComplete: function() {
						h.css({
							backgroundImage: "url(" + o + ")"
						});
						punchgs.TweenLite.set(d, {
							x: 0
						})
					}
				});
				punchgs.TweenLite.fromTo(c, .8, {
					x: 0
				}, {
					force3D: punchgs.force3d,
					x: -c.width(),
					ease: punchgs.Power3.easeOut,
					delay: 1,
					onComplete: function() {
						punchgs.TweenLite.set(c, {
							x: 0
						})
					}
				});
				punchgs.TweenLite.fromTo(h, .8, {
					x: 0
				}, {
					force3D: punchgs.force3d,
					x: c.width(),
					ease: punchgs.Power3.easeOut,
					delay: 1,
					onComplete: function() {
						punchgs.TweenLite.set(h, {
							x: 0
						})
					}
				})
			}
			if (f.hasClass("preview4") && !f.hasClass("hashoveralready")) {
				f.addClass("hashoveralready");
				f.hover(function() {
					var t = e(this).find(".tp-arr-iwrapper");
					var n = e(this).find(".tp-arr-allwrapper");
					punchgs.TweenLite.fromTo(t, .4, {
						x: t.width()
					}, {
						x: 0,
						delay: .3,
						ease: punchgs.Power3.easeOut,
						overwrite: "all"
					});
					punchgs.TweenLite.to(n, .2, {
						autoAlpha: 1,
						overwrite: "all"
					})
				}, function() {
					var t = e(this).find(".tp-arr-iwrapper");
					var n = e(this).find(".tp-arr-allwrapper");
					punchgs.TweenLite.to(t, .4, {
						x: t.width(),
						ease: punchgs.Power3.easeOut,
						delay: .2,
						overwrite: "all"
					});
					punchgs.TweenLite.to(n, .2, {
						delay: .6,
						autoAlpha: 0,
						overwrite: "all"
					})
				});
				l.hover(function() {
					var t = e(this).find(".tp-arr-iwrapper");
					var n = e(this).find(".tp-arr-allwrapper");
					punchgs.TweenLite.fromTo(t, .4, {
						x: 0 - t.width()
					}, {
						x: 0,
						delay: .3,
						ease: punchgs.Power3.easeOut,
						overwrite: "all"
					});
					punchgs.TweenLite.to(n, .2, {
						autoAlpha: 1,
						overwrite: "all"
					})
				}, function() {
					var t = e(this).find(".tp-arr-iwrapper");
					var n = e(this).find(".tp-arr-allwrapper");
					punchgs.TweenLite.to(t, .4, {
						x: 0 - t.width(),
						ease: punchgs.Power3.easeOut,
						delay: .2,
						overwrite: "all"
					});
					punchgs.TweenLite.to(n, .2, {
						delay: .6,
						autoAlpha: 0,
						overwrite: "all"
					})
				})
			}
		};
		var v = function(n, r) {
			r.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").css({
				height: r.container.height()
			});
			r.container.closest(".rev_slider_wrapper").css({
				height: r.container.height()
			});
			r.width = parseInt(r.container.width(), 0);
			r.height = parseInt(r.container.height(), 0);
			r.bw = r.width / r.startwidth;
			r.bh = r.height / r.startheight;
			if (r.bh > r.bw) r.bh = r.bw;
			if (r.bh < r.bw) r.bw = r.bh;
			if (r.bw < r.bh) r.bh = r.bw;
			if (r.bh > 1) {
				r.bw = 1;
				r.bh = 1
			}
			if (r.bw > 1) {
				r.bw = 1;
				r.bh = 1
			}
			r.height = Math.round(r.startheight * (r.width / r.startwidth));
			if (r.height > r.startheight && r.autoHeight != "on") r.height = r.startheight;
			if (r.fullScreen == "on") {
				r.height = r.bw * r.startheight;
				var i = r.container.parent().width();
				var s = e(window).height();
				if (r.fullScreenOffsetContainer != t) {
					try {
						var o = r.fullScreenOffsetContainer.split(",");
						e.each(o, function(t, n) {
							s = s - e(n).outerHeight(true);
							if (s < r.minFullScreenHeight) s = r.minFullScreenHeight
						})
					} catch (u) {}
					try {
						if (r.fullScreenOffset.split("%").length > 1 && r.fullScreenOffset != t && r.fullScreenOffset.length > 0) {
							s = s - e(window).height() * parseInt(r.fullScreenOffset, 0) / 100
						} else {
							if (r.fullScreenOffset != t && r.fullScreenOffset.length > 0) s = s - parseInt(r.fullScreenOffset, 0)
						}
						if (s < r.minFullScreenHeight) s = r.minFullScreenHeight
					} catch (u) {}
				}
				r.container.parent().height(s);
				r.container.closest(".rev_slider_wrapper").height(s);
				r.container.css({
					height: "100%"
				});
				r.height = s
			} else {
				r.container.height(r.height)
			}
			r.slotw = Math.ceil(r.width / r.slots);
			if (r.fullScreen == "on") r.sloth = Math.ceil(e(window).height() / r.slots);
			else r.sloth = Math.ceil(r.height / r.slots);
			if (r.autoHeight == "on") r.sloth = Math.ceil(n.height() / r.slots)
		};
		var m = function(n, r) {
			n.find(".tp-caption").each(function() {
				e(this).addClass(e(this).data("transition"));
				e(this).addClass("start")
			});
			n.find(">ul:first").css({
				overflow: "hidden",
				width: "100%",
				height: "100%",
				maxHeight: n.parent().css("maxHeight")
			});
			if (r.autoHeight == "on") {
				n.find(">ul:first").css({
					overflow: "hidden",
					width: "100%",
					height: "100%",
					maxHeight: "none"
				});
				n.css({
					maxHeight: "none"
				});
				n.parent().css({
					maxHeight: "none"
				})
			}
			n.find(">ul:first >li").each(function(n) {
				var r = e(this);
				r.css({
					width: "100%",
					height: "100%",
					overflow: "hidden"
				});
				if (r.data("link") != t) {
					var i = r.data("link");
					var s = "_self";
					var o = 60;
					if (r.data("slideindex") == "back") o = 0;
					var u = r.data("linktoslide");
					if (r.data("target") != t) s = r.data("target");
					if (i == "slide") {
						r.append('<div class="tp-caption sft slidelink" style="width:100%;height:100%;z-index:' + o + ';" data-x="center" data-y="center" data-linktoslide="' + u + '" data-start="0"><a style="width:100%;height:100%;display:block"><span style="width:100%;height:100%;display:block"></span></a></div>')
					} else {
						u = "no";
						r.append('<div class="tp-caption sft slidelink" style="width:100%;height:100%;z-index:' + o + ';" data-x="center" data-y="center" data-linktoslide="' + u + '" data-start="0"><a style="width:100%;height:100%;display:block" target="' + s + '" href="' + i + '"><span style="width:100%;height:100%;display:block"></span></a></div>')
					}
				}
			});
			n.parent().css({
				overflow: "visible"
			});
			n.find(">ul:first >li >img").each(function(n) {
				var i = e(this);
				i.addClass("defaultimg");
				if (i.data("lazyload") != t && i.data("lazydone") != 1) {} else {
					v(i, r)
				}
				i.wrap('<div class="slotholder" style="width:100%;height:100%;"' + 'data-duration="' + i.data("duration") + '"' + 'data-zoomstart="' + i.data("zoomstart") + '"' + 'data-zoomend="' + i.data("zoomend") + '"' + 'data-rotationstart="' + i.data("rotationstart") + '"' + 'data-rotationend="' + i.data("rotationend") + '"' + 'data-ease="' + i.data("ease") + '"' + 'data-duration="' + i.data("duration") + '"' + 'data-bgpositionend="' + i.data("bgpositionend") + '"' + 'data-bgposition="' + i.data("bgposition") + '"' + 'data-duration="' + i.data("duration") + '"' + 'data-kenburns="' + i.data("kenburns") + '"' + 'data-easeme="' + i.data("ease") + '"' + 'data-bgfit="' + i.data("bgfit") + '"' + 'data-bgfitend="' + i.data("bgfitend") + '"' + 'data-owidth="' + i.data("owidth") + '"' + 'data-oheight="' + i.data("oheight") + '"' + "></div>");
				if (r.dottedOverlay != "none" && r.dottedOverlay != t) i.closest(".slotholder").append('<div class="tp-dottedoverlay ' + r.dottedOverlay + '"></div>');
				var s = i.attr("src"),
					u = i.data("lazyload"),
					a = i.data("bgfit"),
					f = i.data("bgrepeat"),
					l = i.data("bgposition");
				if (a == t) a = "cover";
				if (f == t) f = "no-repeat";
				if (l == t) l = "center center";
				var c = i.closest(".slotholder");
				i.replaceWith('<div class="tp-bgimg defaultimg" data-lazyload="' + i.data("lazyload") + '" data-bgfit="' + a + '"data-bgposition="' + l + '" data-bgrepeat="' + f + '" data-lazydone="' + i.data("lazydone") + '" src="' + s + '" data-src="' + s + '" style="background-color:' + i.css("backgroundColor") + ";background-repeat:" + f + ";background-image:url(" + s + ");background-size:" + a + ";background-position:" + l + ';width:100%;height:100%;"></div>');
				if (o(8)) {
					c.find(".tp-bgimg").css({
						backgroundImage: "none",
						"background-image": "none"
					});
					c.find(".tp-bgimg").append('<img class="ieeightfallbackimage defaultimg" src="' + s + '" style="width:100%">')
				}
				i.css({
					opacity: 0
				});
				i.data("li-id", n)
			})
		};
		var g = function(e, n, r, i) {
			var s = e,
				u = s.find(".defaultimg"),
				a = s.data("zoomstart"),
				f = s.data("rotationstart");
			if (u.data("currotate") != t) f = u.data("currotate");
			if (u.data("curscale") != t) a = u.data("curscale");
			v(u, n);
			var l = u.data("src"),
				c = u.css("background-color"),
				h = n.width,
				p = n.height,
				d = u.data("fxof");
			if (n.autoHeight == "on") p = n.container.height();
			if (d == t) d = 0;
			fullyoff = 0;
			var m = 0,
				g = u.data("bgfit"),
				y = u.data("bgrepeat"),
				w = u.data("bgposition");
			if (g == t) g = "cover";
			if (y == t) y = "no-repeat";
			if (w == t) w = "center center";
			if (o(8)) {
				s.data("kenburns", "off");
				var E = l;
				l = ""
			}
			if (s.data("kenburns") == "on") {
				g = a;
				if (g.toString().length < 4) g = J(g, s, n)
			}
			if (i == "horizontal") {
				if (!r) var m = 0 - n.slotw;
				for (var S = 0; S < n.slots; S++) {
					s.append('<div class="slot" style="position:absolute;' + "top:" + (0 + fullyoff) + "px;" + "left:" + (d + S * n.slotw) + "px;" + "overflow:hidden;width:" + (n.slotw + .6) + "px;" + "height:" + p + 'px">' + '<div class="slotslide" style="position:absolute;' + "top:0px;left:" + m + "px;" + "width:" + (n.slotw + .6) + "px;" + "height:" + p + 'px;overflow:hidden;">' + '<div style="background-color:' + c + ";" + "position:absolute;top:0px;" + "left:" + (0 - S * n.slotw) + "px;" + "width:" + h + "px;height:" + p + "px;" + "background-image:url(" + l + ");" + "background-repeat:" + y + ";" + "background-size:" + g + ";background-position:" + w + ';">' + "</div></div></div>");
					if (a != t && f != t) punchgs.TweenLite.set(s.find(".slot").last(), {
						rotationZ: f
					});
					if (o(8)) {
						s.find(".slot ").last().find(".slotslide").append('<img class="ieeightfallbackimage" src="' + E + '" style="width:100%;height:auto">');
						b(s, n)
					}
				}
			} else {
				if (!r) var m = 0 - n.sloth;
				for (var S = 0; S < n.slots + 2; S++) {
					s.append('<div class="slot" style="position:absolute;' + "top:" + (fullyoff + S * n.sloth) + "px;" + "left:" + d + "px;" + "overflow:hidden;" + "width:" + h + "px;" + "height:" + n.sloth + 'px">' + '<div class="slotslide" style="position:absolute;' + "top:" + m + "px;" + "left:0px;width:" + h + "px;" + "height:" + n.sloth + "px;" + 'overflow:hidden;">' + '<div style="background-color:' + c + ";" + "position:absolute;" + "top:" + (0 - S * n.sloth) + "px;" + "left:0px;" + "width:" + h + "px;height:" + p + "px;" + "background-image:url(" + l + ");" + "background-repeat:" + y + ";" + "background-size:" + g + ";background-position:" + w + ';">' + "</div></div></div>");
					if (a != t && f != t) punchgs.TweenLite.set(s.find(".slot").last(), {
						rotationZ: f
					});
					if (o(8)) {
						s.find(".slot ").last().find(".slotslide").append('<img class="ieeightfallbackimage" src="' + E + '" style="width:100%;height:auto;">');
						b(s, n)
					}
				}
			}
		};
		var y = function(e, n, r) {
			var i = e;
			var s = i.find(".defaultimg");
			var u = i.data("zoomstart");
			var a = i.data("rotationstart");
			if (s.data("currotate") != t) a = s.data("currotate");
			if (s.data("curscale") != t) u = s.data("curscale") * 100;
			v(s, n);
			var f = s.data("src");
			var l = s.css("backgroundColor");
			var c = n.width;
			var h = n.height;
			if (n.autoHeight == "on") h = n.container.height();
			var p = s.data("fxof");
			if (p == t) p = 0;
			fullyoff = 0;
			var d = 0;
			if (o(8)) {
				var m = f;
				f = ""
			}
			var g = 0;
			if (n.sloth > n.slotw) g = n.sloth;
			else g = n.slotw;
			if (!r) {
				var d = 0 - g
			}
			n.slotw = g;
			n.sloth = g;
			var y = 0;
			var w = 0;
			var E = s.data("bgfit");
			var S = s.data("bgrepeat");
			var x = s.data("bgposition");
			if (E == t) E = "cover";
			if (S == t) S = "no-repeat";
			if (x == t) x = "center center";
			if (i.data("kenburns") == "on") {
				E = u;
				if (E.toString().length < 4) E = J(E, i, n)
			}
			for (var T = 0; T < n.slots; T++) {
				w = 0;
				for (var N = 0; N < n.slots; N++) {
					i.append('<div class="slot" ' + 'style="position:absolute;' + "top:" + (fullyoff + w) + "px;" + "left:" + (p + y) + "px;" + "width:" + g + "px;" + "height:" + g + "px;" + 'overflow:hidden;">' + '<div class="slotslide" data-x="' + y + '" data-y="' + w + '" ' + 'style="position:absolute;' + "top:" + 0 + "px;" + "left:" + 0 + "px;" + "width:" + g + "px;" + "height:" + g + "px;" + 'overflow:hidden;">' + '<div style="position:absolute;' + "top:" + (0 - w) + "px;" + "left:" + (0 - y) + "px;" + "width:" + c + "px;" + "height:" + h + "px;" + "background-color:" + l + ";" + "background-image:url(" + f + ");" + "background-repeat:" + S + ";" + "background-size:" + E + ";background-position:" + x + ';">' + "</div></div></div>");
					w = w + g;
					if (o(8)) {
						i.find(".slot ").last().find(".slotslide").append('<img src="' + m + '">');
						b(i, n)
					}
					if (u != t && a != t) punchgs.TweenLite.set(i.find(".slot").last(), {
						rotationZ: a
					})
				}
				y = y + g
			}
		};
		var b = function(e, t) {
			if (o(8)) {
				var n = e.find(".ieeightfallbackimage");
				var r = n.width(),
					i = n.height();
				if (t.startwidth / t.startheight < e.data("owidth") / e.data("oheight")) n.css({
					width: "auto",
					height: "100%"
				});
				else n.css({
					width: "100%",
					height: "auto"
				});
				setTimeout(function() {
					var r = n.width(),
						i = n.height();
					if (e.data("bgposition") == "center center") n.css({
						position: "absolute",
						top: t.height / 2 - i / 2 + "px",
						left: t.width / 2 - r / 2 + "px"
					});
					if (e.data("bgposition") == "center top" || e.data("bgposition") == "top center") n.css({
						position: "absolute",
						top: "0px",
						left: t.width / 2 - r / 2 + "px"
					});
					if (e.data("bgposition") == "center bottom" || e.data("bgposition") == "bottom center") n.css({
						position: "absolute",
						bottom: "0px",
						left: t.width / 2 - r / 2 + "px"
					});
					if (e.data("bgposition") == "right top" || e.data("bgposition") == "top right") n.css({
						position: "absolute",
						top: "0px",
						right: "0px"
					});
					if (e.data("bgposition") == "right bottom" || e.data("bgposition") == "bottom right") n.css({
						position: "absolute",
						bottom: "0px",
						right: "0px"
					});
					if (e.data("bgposition") == "right center" || e.data("bgposition") == "center right") n.css({
						position: "absolute",
						top: t.height / 2 - i / 2 + "px",
						right: "0px"
					});
					if (e.data("bgposition") == "left bottom" || e.data("bgposition") == "bottom left") n.css({
						position: "absolute",
						bottom: "0px",
						left: "0px"
					});
					if (e.data("bgposition") == "left center" || e.data("bgposition") == "center left") n.css({
						position: "absolute",
						top: t.height / 2 - i / 2 + "px",
						left: "0px"
					})
				}, 20)
			}
		};
		var w = function(t, n, r) {
			r.find(".slot").each(function() {
				e(this).remove()
			});
			n.transition = 0
		};
		var E = function(n, r) {
			n.find("img, .defaultimg").each(function(n) {
				var i = e(this);
				if (i.data("lazyload") != i.attr("src") && r < 3 && i.data("lazyload") != t && i.data("lazyload") != "undefined") {
					if (i.data("lazyload") != t && i.data("lazyload") != "undefined") {
						i.attr("src", i.data("lazyload"));
						var s = new Image;
						s.onload = function(e) {
							i.data("lazydone", 1);
							if (i.hasClass("defaultimg")) S(i, s)
						};
						s.error = function() {
							i.data("lazydone", 1)
						};
						s.src = i.attr("src");
						if (s.complete) {
							if (i.hasClass("defaultimg")) S(i, s);
							i.data("lazydone", 1)
						}
					}
				} else {
					if ((i.data("lazyload") === t || i.data("lazyload") === "undefined") && i.data("lazydone") != 1) {
						var s = new Image;
						s.onload = function() {
							if (i.hasClass("defaultimg")) S(i, s);
							i.data("lazydone", 1)
						};
						s.error = function() {
							i.data("lazydone", 1)
						};
						if (i.attr("src") != t && i.attr("src") != "undefined") {
							s.src = i.attr("src")
						} else s.src = i.data("src");
						if (s.complete) {
							if (i.hasClass("defaultimg")) {
								S(i, s)
							}
							i.data("lazydone", 1)
						}
					}
				}
			})
		};
		var S = function(e, t) {
			var n = e.closest("li");
			var r = t.width;
			var i = t.height;
			n.data("owidth", r);
			n.data("oheight", i);
			n.find(".slotholder").data("owidth", r);
			n.find(".slotholder").data("oheight", i);
			n.data("loadeddone", 1)
		};
		var x = function(n, r, i) {
			E(n, 0);
			var s = setInterval(function() {
				i.bannertimeronpause = true;
				i.container.trigger("stoptimer");
				i.cd = 0;
				var o = 0;
				n.find("img, .defaultimg").each(function(t) {
					if (e(this).data("lazydone") != 1) {
						o++
					}
				});
				if (o > 0) E(n, o);
				else {
					clearInterval(s);
					if (r != t) r()
				}
			}, 100)
		};
		var T = function(e, n) {
			try {
				var r = e.find(">ul:first-child >li:eq(" + n.act + ")")
			} catch (i) {
				var r = e.find(">ul:first-child >li:eq(1)")
			}
			n.lastslide = n.act;
			var s = e.find(">ul:first-child >li:eq(" + n.next + ")");
			var u = s.find(".defaultimg");
			n.bannertimeronpause = true;
			e.trigger("stoptimer");
			n.cd = 0;
			if (u.data("lazyload") != t && u.data("lazyload") != "undefined" && u.data("lazydone") != 1) {
				if (!o(8)) u.css({
					backgroundImage: 'url("' + s.find(".defaultimg").data("lazyload") + '")'
				});
				else {
					u.attr("src", s.find(".defaultimg").data("lazyload"))
				}
				u.data("src", s.find(".defaultimg").data("lazyload"));
				u.data("lazydone", 1);
				u.data("orgw", 0);
				s.data("loadeddone", 1);
				e.find(".tp-loader").css({
					display: "block"
				});
				x(e.find(".tp-static-layers"), function() {
					x(s, function() {
						var t = s.find(".slotholder");
						if (t.data("kenburns") == "on") {
							var r = setInterval(function() {
								var i = t.data("owidth");
								if (i >= 0) {
									clearInterval(r);
									N(n, u, e)
								}
							}, 10)
						} else N(n, u, e)
					}, n)
				}, n)
			} else {
				if (s.data("loadeddone") === t) {
					s.data("loadeddone", 1);
					x(s, function() {
						N(n, u, e)
					}, n)
				} else N(n, u, e)
			}
		};
		var N = function(e, t, n) {
			e.bannertimeronpause = false;
			e.cd = 0;
			n.trigger("nulltimer");
			n.find(".tp-loader").css({
				display: "none"
			});
			v(t, e);
			p(n, e);
			v(t, e);
			C(n, e)
		};
		var C = function(e, n) {
			e.trigger("revolution.slide.onbeforeswap");
			n.transition = 1;
			n.videoplaying = false;
			try {
				var r = e.find(">ul:first-child >li:eq(" + n.act + ")")
			} catch (i) {
				var r = e.find(">ul:first-child >li:eq(1)")
			}
			n.lastslide = n.act;
			var s = e.find(">ul:first-child >li:eq(" + n.next + ")");
			setTimeout(function() {
				d(n)
			}, 200);
			var o = r.find(".slotholder");
			var u = s.find(".slotholder");
			if (u.data("kenburns") == "on" || o.data("kenburns") == "on") {
				Y(e, n);
				e.find(".kenburnimg").remove()
			}
			if (s.data("delay") != t) {
				n.cd = 0;
				n.delay = s.data("delay")
			} else {
				n.delay = n.origcd
			}
			if (n.firststart == 1) punchgs.TweenLite.set(r, {
				autoAlpha: 0
			});
			punchgs.TweenLite.set(r, {
				zIndex: 18
			});
			punchgs.TweenLite.set(s, {
				autoAlpha: 0,
				zIndex: 20
			});
			var a = 0;
			if (r.index() != s.index() && n.firststart != 1) {
				a = U(r, n)
			}
			if (r.data("saveperformance") != "on") a = 0;
			setTimeout(function() {
				e.trigger("restarttimer");
				k(e, n, s, r, o, u)
			}, a)
		};
		var k = function(n, r, i, s, u, a) {
			function T() {
				e.each(d, function(e, t) {
					if (t[0] == h || t[8] == h) {
						f = t[1];
						p = t[2];
						b = w
					}
					w = w + 1
				})
			}
			if (i.data("differentissplayed") == "prepared") {
				i.data("differentissplayed", "done");
				i.data("transition", i.data("savedtransition"));
				i.data("slotamount", i.data("savedslotamount"));
				i.data("masterspeed", i.data("savedmasterspeed"))
			}
			if (i.data("fstransition") != t && i.data("differentissplayed") != "done") {
				i.data("savedtransition", i.data("transition"));
				i.data("savedslotamount", i.data("slotamount"));
				i.data("savedmasterspeed", i.data("masterspeed"));
				i.data("transition", i.data("fstransition"));
				i.data("slotamount", i.data("fsslotamount"));
				i.data("masterspeed", i.data("fsmasterspeed"));
				i.data("differentissplayed", "prepared")
			}
			var f = 0,
				l = i.data("transition").split(","),
				c = i.data("nexttransid");
			if (c == t) {
				c = 0;
				i.data("nexttransid", c)
			} else {
				c = c + 1;
				if (c == l.length) c = 0;
				i.data("nexttransid", c)
			}
			var h = l[c];
			if (r.ie) {
				if (h == "boxfade") h = "boxslide";
				if (h == "slotfade-vertical") h = "slotzoom-vertical";
				if (h == "slotfade-horizontal") h = "slotzoom-horizontal"
			}
			if (o(8)) {
				h = 11
			}
			var p = 0;
			if (r.parallax == "scroll" && r.parallaxFirstGo == t) {
				r.parallaxFirstGo = true;
				et(n, r);
				setTimeout(function() {
					et(n, r)
				}, 210);
				setTimeout(function() {
					et(n, r)
				}, 420)
			}
			if (h == "boxslide" || h == "boxfade" || h == "papercut" || h == 0 || h == 1 || h == 16) h = 9;
			if (h == "slidehorizontal") {
				h = "slideleft";
				if (r.leftarrowpressed == 1) h = "slideright"
			}
			if (h == "slidevertical") {
				h = "slideup";
				if (r.leftarrowpressed == 1) h = "slidedown"
			}
			if (h == "parallaxhorizontal") {
				h = "parallaxtoleft";
				if (r.leftarrowpressed == 1) h = "parallaxtoright"
			}
			if (h == "parallaxvertical") {
				h = "parallaxtotop";
				if (r.leftarrowpressed == 1) h = "parallaxtobottom"
			}
			var d = [
				["boxslide", 0, 1, 10, 0, "box", false, null, 0],
				["boxfade", 1, 0, 10, 0, "box", false, null, 1],
				["slotslide-horizontal", 2, 0, 0, 200, "horizontal", true, false, 2],
				["slotslide-vertical", 3, 0, 0, 200, "vertical", true, false, 3],
				["curtain-1", 4, 3, 0, 0, "horizontal", true, true, 4],
				["curtain-2", 5, 3, 0, 0, "horizontal", true, true, 5],
				["curtain-3", 6, 3, 25, 0, "horizontal", true, true, 6],
				["slotzoom-horizontal", 7, 0, 0, 400, "horizontal", true, true, 7],
				["slotzoom-vertical", 8, 0, 0, 0, "vertical", true, true, 8],
				["slotfade-horizontal", 9, 0, 0, 500, "horizontal", true, null, 9],
				["slotfade-vertical", 10, 0, 0, 500, "vertical", true, null, 10],
				["fade", 11, 0, 1, 300, "horizontal", true, null, 11],
				["slideleft", 12, 0, 1, 0, "horizontal", true, true, 12],
				["slideup", 13, 0, 1, 0, "horizontal", true, true, 13],
				["slidedown", 14, 0, 1, 0, "horizontal", true, true, 14],
				["slideright", 15, 0, 1, 0, "horizontal", true, true, 15],
				["papercut", 16, 0, 0, 600, "", null, null, 16],
				["3dcurtain-horizontal", 17, 0, 20, 100, "vertical", false, true, 17],
				["3dcurtain-vertical", 18, 0, 10, 100, "horizontal", false, true, 18],
				["cubic", 19, 0, 20, 600, "horizontal", false, true, 19],
				["cube", 19, 0, 20, 600, "horizontal", false, true, 20],
				["flyin", 20, 0, 4, 600, "vertical", false, true, 21],
				["turnoff", 21, 0, 1, 1600, "horizontal", false, true, 22],
				["incube", 22, 0, 20, 200, "horizontal", false, true, 23],
				["cubic-horizontal", 23, 0, 20, 500, "vertical", false, true, 24],
				["cube-horizontal", 23, 0, 20, 500, "vertical", false, true, 25],
				["incube-horizontal", 24, 0, 20, 500, "vertical", false, true, 26],
				["turnoff-vertical", 25, 0, 1, 200, "horizontal", false, true, 27],
				["fadefromright", 12, 1, 1, 0, "horizontal", true, true, 28],
				["fadefromleft", 15, 1, 1, 0, "horizontal", true, true, 29],
				["fadefromtop", 14, 1, 1, 0, "horizontal", true, true, 30],
				["fadefrombottom", 13, 1, 1, 0, "horizontal", true, true, 31],
				["fadetoleftfadefromright", 12, 2, 1, 0, "horizontal", true, true, 32],
				["fadetorightfadetoleft", 15, 2, 1, 0, "horizontal", true, true, 33],
				["fadetobottomfadefromtop", 14, 2, 1, 0, "horizontal", true, true, 34],
				["fadetotopfadefrombottom", 13, 2, 1, 0, "horizontal", true, true, 35],
				["parallaxtoright", 12, 3, 1, 0, "horizontal", true, true, 36],
				["parallaxtoleft", 15, 3, 1, 0, "horizontal", true, true, 37],
				["parallaxtotop", 14, 3, 1, 0, "horizontal", true, true, 38],
				["parallaxtobottom", 13, 3, 1, 0, "horizontal", true, true, 39],
				["scaledownfromright", 12, 4, 1, 0, "horizontal", true, true, 40],
				["scaledownfromleft", 15, 4, 1, 0, "horizontal", true, true, 41],
				["scaledownfromtop", 14, 4, 1, 0, "horizontal", true, true, 42],
				["scaledownfrombottom", 13, 4, 1, 0, "horizontal", true, true, 43],
				["zoomout", 13, 5, 1, 0, "horizontal", true, true, 44],
				["zoomin", 13, 6, 1, 0, "horizontal", true, true, 45],
				["notransition", 26, 0, 1, 0, "horizontal", true, null, 46]
			];
			var v = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45];
			var m = [16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27];
			var f = 0;
			var p = 1;
			var b = 0;
			var w = 0;
			var E = new Array;
			if (a.data("kenburns") == "on") {
				if (h == "boxslide" || h == 0 || h == "boxfade" || h == 1 || h == "papercut" || h == 16) h = 11;
				K(n, r, true, true)
			}
			if (h == "random") {
				h = Math.round(Math.random() * d.length - 1);
				if (h > d.length - 1) h = d.length - 1
			}
			if (h == "random-static") {
				h = Math.round(Math.random() * v.length - 1);
				if (h > v.length - 1) h = v.length - 1;
				h = v[h]
			}
			if (h == "random-premium") {
				h = Math.round(Math.random() * m.length - 1);
				if (h > m.length - 1) h = m.length - 1;
				h = m[h]
			}
			var S = [12, 13, 14, 15, 16, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45];
			if (r.isJoomla == true && window.MooTools != t && S.indexOf(h) != -1) {
				var x = Math.round(Math.random() * (m.length - 2)) + 1;
				if (x > m.length - 1) x = m.length - 1;
				if (x == 0) x = 1;
				h = m[x]
			}
			T();
			if (o(8) && f > 15 && f < 28) {
				h = Math.round(Math.random() * v.length - 1);
				if (h > v.length - 1) h = v.length - 1;
				h = v[h];
				w = 0;
				T()
			}
			var N = -1;
			if (r.leftarrowpressed == 1 || r.act > r.next) N = 1;
			r.leftarrowpressed = 0;
			if (f > 26) f = 26;
			if (f < 0) f = 0;
			var C = 300;
			if (i.data("masterspeed") != t && i.data("masterspeed") > 99 && i.data("masterspeed") < 4001) C = i.data("masterspeed");
			E = d[b];
			n.parent().find(".bullet").each(function() {
				var t = e(this);
				t.removeClass("selected");
				if (r.navigationArrows == "withbullet" || r.navigationArrows == "nexttobullets") {
					if (t.index() - 1 == r.next) t.addClass("selected")
				} else {
					if (t.index() == r.next) t.addClass("selected")
				}
			});
			var k = new punchgs.TimelineLite({
				onComplete: function() {
					L(n, r, a, u, i, s, k)
				}
			});
			k.add(punchgs.TweenLite.set(a.find(".defaultimg"), {
				opacity: 0
			}));
			k.pause();
			if (i.data("slotamount") == t || i.data("slotamount") < 1) {
				r.slots = Math.round(Math.random() * 12 + 4);
				if (h == "boxslide") r.slots = Math.round(Math.random() * 6 + 3);
				else if (h == "flyin") r.slots = Math.round(Math.random() * 4 + 1)
			} else {
				r.slots = i.data("slotamount")
			}
			if (i.data("rotate") == t) r.rotate = 0;
			else if (i.data("rotate") == 999) r.rotate = Math.round(Math.random() * 360);
			else r.rotate = i.data("rotate");
			if (!e.support.transition || r.ie || r.ie9) r.rotate = 0;
			if (r.firststart == 1) r.firststart = 0;
			C = C + E[4];
			if ((f == 4 || f == 5 || f == 6) && r.slots < 3) r.slots = 3;
			if (E[3] != 0) r.slots = Math.min(r.slots, E[3]);
			if (f == 9) r.slots = r.width / 20;
			if (f == 10) r.slots = r.height / 20;
			if (E[5] == "box") {
				if (E[7] != null) y(u, r, E[7]);
				if (E[6] != null) y(a, r, E[6])
			} else if (E[5] == "vertical" || E[5] == "horizontal") {
				if (E[7] != null) g(u, r, E[7], E[5]);
				if (E[6] != null) g(a, r, E[6], E[5])
			}
			if (f == 0) {
				var A = Math.ceil(r.height / r.sloth);
				var O = 0;
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					O = O + 1;
					if (O == A) O = 0;
					k.add(punchgs.TweenLite.from(n, C / 600, {
						opacity: 0,
						top: 0 - r.sloth,
						left: 0 - r.slotw,
						rotation: r.rotate,
						force3D: "auto",
						ease: punchgs.Power2.easeOut
					}), (t * 15 + O * 30) / 1500)
				})
			}
			if (f == 1) {
				var M, _ = 0;
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					rand = Math.random() * C + 300;
					rand2 = Math.random() * 500 + 200;
					if (rand + rand2 > M) {
						M = rand2 + rand2;
						_ = t
					}
					k.add(punchgs.TweenLite.from(n, rand / 1e3, {
						autoAlpha: 0,
						force3D: "auto",
						rotation: r.rotate,
						ease: punchgs.Power2.easeInOut
					}), rand2 / 1e3)
				})
			}
			if (f == 2) {
				var D = new punchgs.TimelineLite;
				u.find(".slotslide").each(function() {
					var t = e(this);
					D.add(punchgs.TweenLite.to(t, C / 1e3, {
						left: r.slotw,
						force3D: "auto",
						rotation: 0 - r.rotate
					}), 0);
					k.add(D, 0)
				});
				a.find(".slotslide").each(function() {
					var t = e(this);
					D.add(punchgs.TweenLite.from(t, C / 1e3, {
						left: 0 - r.slotw,
						force3D: "auto",
						rotation: r.rotate
					}), 0);
					k.add(D, 0)
				})
			}
			if (f == 3) {
				var D = new punchgs.TimelineLite;
				u.find(".slotslide").each(function() {
					var t = e(this);
					D.add(punchgs.TweenLite.to(t, C / 1e3, {
						top: r.sloth,
						rotation: r.rotate,
						force3D: "auto",
						transformPerspective: 600
					}), 0);
					k.add(D, 0)
				});
				a.find(".slotslide").each(function() {
					var t = e(this);
					D.add(punchgs.TweenLite.from(t, C / 1e3, {
						top: 0 - r.sloth,
						rotation: r.rotate,
						ease: punchgs.Power2.easeOut,
						force3D: "auto",
						transformPerspective: 600
					}), 0);
					k.add(D, 0)
				})
			}
			if (f == 4 || f == 5) {
				setTimeout(function() {
					u.find(".defaultimg").css({
						opacity: 0
					})
				}, 100);
				var P = C / 1e3,
					H = P,
					D = new punchgs.TimelineLite;
				u.find(".slotslide").each(function(t) {
					var n = e(this);
					var i = t * P / r.slots;
					if (f == 5) i = (r.slots - t - 1) * P / r.slots / 1.5;
					D.add(punchgs.TweenLite.to(n, P * 3, {
						transformPerspective: 600,
						force3D: "auto",
						top: 0 + r.height,
						opacity: .5,
						rotation: r.rotate,
						ease: punchgs.Power2.easeInOut,
						delay: i
					}), 0);
					k.add(D, 0)
				});
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					var i = t * P / r.slots;
					if (f == 5) i = (r.slots - t - 1) * P / r.slots / 1.5;
					D.add(punchgs.TweenLite.from(n, P * 3, {
						top: 0 - r.height,
						opacity: .5,
						rotation: r.rotate,
						force3D: "auto",
						ease: punchgs.Power2.easeInOut,
						delay: i
					}), 0);
					k.add(D, 0)
				})
			}
			if (f == 6) {
				if (r.slots < 2) r.slots = 2;
				if (r.slots % 2) r.slots = r.slots + 1;
				var D = new punchgs.TimelineLite;
				setTimeout(function() {
					u.find(".defaultimg").css({
						opacity: 0
					})
				}, 100);
				u.find(".slotslide").each(function(t) {
					var n = e(this);
					if (t + 1 < r.slots / 2) var i = (t + 2) * 90;
					else var i = (2 + r.slots - t) * 90;
					D.add(punchgs.TweenLite.to(n, (C + i) / 1e3, {
						top: 0 + r.height,
						opacity: 1,
						force3D: "auto",
						rotation: r.rotate,
						ease: punchgs.Power2.easeInOut
					}), 0);
					k.add(D, 0)
				});
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					if (t + 1 < r.slots / 2) var i = (t + 2) * 90;
					else var i = (2 + r.slots - t) * 90;
					D.add(punchgs.TweenLite.from(n, (C + i) / 1e3, {
						top: 0 - r.height,
						opacity: 1,
						force3D: "auto",
						rotation: r.rotate,
						ease: punchgs.Power2.easeInOut
					}), 0);
					k.add(D, 0)
				})
			}
			if (f == 7) {
				C = C * 2;
				var D = new punchgs.TimelineLite;
				setTimeout(function() {
					u.find(".defaultimg").css({
						opacity: 0
					})
				}, 100);
				u.find(".slotslide").each(function() {
					var t = e(this).find("div");
					D.add(punchgs.TweenLite.to(t, C / 1e3, {
						left: 0 - r.slotw / 2 + "px",
						top: 0 - r.height / 2 + "px",
						width: r.slotw * 2 + "px",
						height: r.height * 2 + "px",
						opacity: 0,
						rotation: r.rotate,
						force3D: "auto",
						ease: punchgs.Power2.easeOut
					}), 0);
					k.add(D, 0)
				});
				a.find(".slotslide").each(function(t) {
					var n = e(this).find("div");
					D.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						left: 0,
						top: 0,
						opacity: 0,
						transformPerspective: 600
					}, {
						left: 0 - t * r.slotw + "px",
						ease: punchgs.Power2.easeOut,
						force3D: "auto",
						top: 0 + "px",
						width: r.width,
						height: r.height,
						opacity: 1,
						rotation: 0,
						delay: .1
					}), 0);
					k.add(D, 0)
				})
			}
			if (f == 8) {
				C = C * 3;
				var D = new punchgs.TimelineLite;
				u.find(".slotslide").each(function() {
					var t = e(this).find("div");
					D.add(punchgs.TweenLite.to(t, C / 1e3, {
						left: 0 - r.width / 2 + "px",
						top: 0 - r.sloth / 2 + "px",
						width: r.width * 2 + "px",
						height: r.sloth * 2 + "px",
						force3D: "auto",
						opacity: 0,
						rotation: r.rotate
					}), 0);
					k.add(D, 0)
				});
				a.find(".slotslide").each(function(t) {
					var n = e(this).find("div");
					D.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						left: 0,
						top: 0,
						opacity: 0,
						force3D: "auto"
					}, {
						left: 0 + "px",
						top: 0 - t * r.sloth + "px",
						width: a.find(".defaultimg").data("neww") + "px",
						height: a.find(".defaultimg").data("newh") + "px",
						opacity: 1,
						rotation: 0
					}), 0);
					k.add(D, 0)
				})
			}
			if (f == 9 || f == 10) {
				var j = 0;
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					j++;
					k.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						autoAlpha: 0,
						force3D: "auto",
						transformPerspective: 600
					}, {
						autoAlpha: 1,
						ease: punchgs.Power2.easeInOut,
						delay: t * 5 / 1e3
					}), 0)
				})
			}
			if (f == 11 || f == 26) {
				var j = 0;
				if (f == 26) C = 0;
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					k.add(punchgs.TweenLite.from(n, C / 1e3, {
						autoAlpha: 0,
						force3D: "auto",
						ease: punchgs.Power2.easeInOut
					}), 0)
				})
			}
			if (f == 12 || f == 13 || f == 14 || f == 15) {
				C = 1e3;
				setTimeout(function() {
					punchgs.TweenLite.set(u.find(".defaultimg"), {
						autoAlpha: 0
					})
				}, 100);
				var F = r.width;
				var I = r.height;
				var q = a.find(".slotslide");
				if (r.fullWidth == "on" || r.fullScreen == "on") {
					F = q.width();
					I = q.height()
				}
				var R = 0;
				var U = 0;
				if (f == 12) R = F;
				else if (f == 15) R = 0 - F;
				else if (f == 13) U = I;
				else if (f == 14) U = 0 - I;
				var z = 1;
				var W = 1;
				var X = 1;
				var V = punchgs.Power2.easeInOut;
				var $ = punchgs.Power2.easeInOut;
				var J = C / 1e3;
				var Q = J;
				if (p == 1) z = 0;
				if (p == 2) z = 0;
				if (p == 3) {
					V = punchgs.Power2.easeInOut;
					$ = punchgs.Power1.easeInOut;
					J = C / 1200
				}
				if (p == 4 || p == 5) W = .6;
				if (p == 6) W = 1.4;
				if (p == 5 || p == 6) {
					X = 1.4;
					z = 0;
					F = 0;
					I = 0;
					R = 0;
					U = 0
				}
				if (p == 6) X = .6;
				var G = 0;
				k.add(punchgs.TweenLite.from(q, J, {
					left: R,
					top: U,
					scale: X,
					opacity: z,
					rotation: r.rotate,
					ease: $,
					force3D: "auto"
				}), 0);
				var Y = u.find(".slotslide");
				if (p == 4 || p == 5) {
					F = 0;
					I = 0
				}
				if (p != 1) {
					if (f == 12) k.add(punchgs.TweenLite.to(Y, Q, {
						left: 0 - F + "px",
						force3D: "auto",
						scale: W,
						opacity: z,
						rotation: r.rotate,
						ease: V
					}), 0);
					else if (f == 15) k.add(punchgs.TweenLite.to(Y, Q, {
						left: F + "px",
						force3D: "auto",
						scale: W,
						opacity: z,
						rotation: r.rotate,
						ease: V
					}), 0);
					else if (f == 13) k.add(punchgs.TweenLite.to(Y, Q, {
						top: 0 - I + "px",
						force3D: "auto",
						scale: W,
						opacity: z,
						rotation: r.rotate,
						ease: V
					}), 0);
					else if (f == 14) k.add(punchgs.TweenLite.to(Y, Q, {
						top: I + "px",
						orce3D: "auto",
						scale: W,
						opacity: z,
						rotation: r.rotate,
						ease: V
					}), 0)
				}
			}
			if (f == 16) {
				var D = new punchgs.TimelineLite;
				k.add(punchgs.TweenLite.set(s, {
					position: "absolute",
					"z-index": 20
				}), 0);
				k.add(punchgs.TweenLite.set(i, {
					position: "absolute",
					"z-index": 15
				}), 0);
				s.wrapInner('<div class="tp-half-one" style="position:relative; width:100%;height:100%"></div>');
				s.find(".tp-half-one").clone(true).appendTo(s).addClass("tp-half-two");
				s.find(".tp-half-two").removeClass("tp-half-one");
				var F = r.width;
				var I = r.height;
				if (r.autoHeight == "on") I = n.height();
				s.find(".tp-half-one .defaultimg").wrap('<div class="tp-papercut" style="width:' + F + "px;height:" + I + 'px;"></div>');
				s.find(".tp-half-two .defaultimg").wrap('<div class="tp-papercut" style="width:' + F + "px;height:" + I + 'px;"></div>');
				s.find(".tp-half-two .defaultimg").css({
					position: "absolute",
					top: "-50%"
				});
				s.find(".tp-half-two .tp-caption").wrapAll('<div style="position:absolute;top:-50%;left:0px;"></div>');
				k.add(punchgs.TweenLite.set(s.find(".tp-half-two"), {
					width: F,
					height: I,
					overflow: "hidden",
					zIndex: 15,
					position: "absolute",
					top: I / 2,
					left: "0px",
					transformPerspective: 600,
					transformOrigin: "center bottom"
				}), 0);
				k.add(punchgs.TweenLite.set(s.find(".tp-half-one"), {
					width: F,
					height: I / 2,
					overflow: "visible",
					zIndex: 10,
					position: "absolute",
					top: "0px",
					left: "0px",
					transformPerspective: 600,
					transformOrigin: "center top"
				}), 0);
				var Z = s.find(".defaultimg");
				var tt = Math.round(Math.random() * 20 - 10),
					nt = Math.round(Math.random() * 20 - 10),
					rt = Math.round(Math.random() * 20 - 10),
					it = Math.random() * .4 - .2,
					st = Math.random() * .4 - .2,
					ot = Math.random() * 1 + 1,
					ut = Math.random() * 1 + 1,
					at = Math.random() * .3 + .3;
				k.add(punchgs.TweenLite.set(s.find(".tp-half-one"), {
					overflow: "hidden"
				}), 0);
				k.add(punchgs.TweenLite.fromTo(s.find(".tp-half-one"), C / 800, {
					width: F,
					height: I / 2,
					position: "absolute",
					top: "0px",
					left: "0px",
					force3D: "auto",
					transformOrigin: "center top"
				}, {
					scale: ot,
					rotation: tt,
					y: 0 - I - I / 4,
					autoAlpha: 0,
					ease: punchgs.Power2.easeInOut
				}), 0);
				k.add(punchgs.TweenLite.fromTo(s.find(".tp-half-two"), C / 800, {
					width: F,
					height: I,
					overflow: "hidden",
					position: "absolute",
					top: I / 2,
					left: "0px",
					force3D: "auto",
					transformOrigin: "center bottom"
				}, {
					scale: ut,
					rotation: nt,
					y: I + I / 4,
					ease: punchgs.Power2.easeInOut,
					autoAlpha: 0,
					onComplete: function() {
						punchgs.TweenLite.set(s, {
							position: "absolute",
							"z-index": 15
						});
						punchgs.TweenLite.set(i, {
							position: "absolute",
							"z-index": 20
						});
						if (s.find(".tp-half-one").length > 0) {
							s.find(".tp-half-one .defaultimg").unwrap();
							s.find(".tp-half-one .slotholder").unwrap()
						}
						s.find(".tp-half-two").remove()
					}
				}), 0);
				D.add(punchgs.TweenLite.set(a.find(".defaultimg"), {
					autoAlpha: 1
				}), 0);
				if (s.html() != null) k.add(punchgs.TweenLite.fromTo(i, (C - 200) / 1e3, {
					scale: at,
					x: r.width / 4 * it,
					y: I / 4 * st,
					rotation: rt,
					force3D: "auto",
					transformOrigin: "center center",
					ease: punchgs.Power2.easeOut
				}, {
					autoAlpha: 1,
					scale: 1,
					x: 0,
					y: 0,
					rotation: 0
				}), 0);
				k.add(D, 0)
			}
			if (f == 17) {
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					k.add(punchgs.TweenLite.fromTo(n, C / 800, {
						opacity: 0,
						rotationY: 0,
						scale: .9,
						rotationX: -110,
						force3D: "auto",
						transformPerspective: 600,
						transformOrigin: "center center"
					}, {
						opacity: 1,
						top: 0,
						left: 0,
						scale: 1,
						rotation: 0,
						rotationX: 0,
						force3D: "auto",
						rotationY: 0,
						ease: punchgs.Power3.easeOut,
						delay: t * .06
					}), 0)
				})
			}
			if (f == 18) {
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					k.add(punchgs.TweenLite.fromTo(n, C / 500, {
						autoAlpha: 0,
						rotationY: 310,
						scale: .9,
						rotationX: 10,
						force3D: "auto",
						transformPerspective: 600,
						transformOrigin: "center center"
					}, {
						autoAlpha: 1,
						top: 0,
						left: 0,
						scale: 1,
						rotation: 0,
						rotationX: 0,
						force3D: "auto",
						rotationY: 0,
						ease: punchgs.Power3.easeOut,
						delay: t * .06
					}), 0)
				})
			}
			if (f == 19 || f == 22) {
				var D = new punchgs.TimelineLite;
				k.add(punchgs.TweenLite.set(s, {
					zIndex: 20
				}), 0);
				k.add(punchgs.TweenLite.set(i, {
					zIndex: 20
				}), 0);
				setTimeout(function() {
					u.find(".defaultimg").css({
						opacity: 0
					})
				}, 100);
				var ft = i.css("z-index"),
					lt = s.css("z-index"),
					ct = 90,
					z = 1;
				if (N == 1) ct = -90;
				if (f == 19) {
					var ht = "center center -" + r.height / 2;
					z = 0
				} else {
					var ht = "center center " + r.height / 2
				}
				punchgs.TweenLite.set(n, {
					transformStyle: "flat",
					backfaceVisibility: "hidden",
					transformPerspective: 600
				});
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					D.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						transformStyle: "flat",
						backfaceVisibility: "hidden",
						left: 0,
						rotationY: r.rotate,
						z: 10,
						top: 0,
						scale: 1,
						force3D: "auto",
						transformPerspective: 600,
						transformOrigin: ht,
						rotationX: ct
					}, {
						left: 0,
						rotationY: 0,
						top: 0,
						z: 0,
						scale: 1,
						force3D: "auto",
						rotationX: 0,
						delay: t * 50 / 1e3,
						ease: punchgs.Power2.easeInOut
					}), 0);
					D.add(punchgs.TweenLite.to(n, .1, {
						autoAlpha: 1,
						delay: t * 50 / 1e3
					}), 0);
					k.add(D)
				});
				u.find(".slotslide").each(function(t) {
					var n = e(this);
					var i = -90;
					if (N == 1) i = 90;
					D.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						transformStyle: "flat",
						backfaceVisibility: "hidden",
						autoAlpha: 1,
						rotationY: 0,
						top: 0,
						z: 0,
						scale: 1,
						force3D: "auto",
						transformPerspective: 600,
						transformOrigin: ht,
						rotationX: 0
					}, {
						autoAlpha: 1,
						rotationY: r.rotate,
						top: 0,
						z: 10,
						scale: 1,
						rotationX: i,
						delay: t * 50 / 1e3,
						force3D: "auto",
						ease: punchgs.Power2.easeInOut
					}), 0);
					k.add(D)
				})
			}
			if (f == 20) {
				setTimeout(function() {
					u.find(".defaultimg").css({
						opacity: 0
					})
				}, 100);
				var ft = i.css("z-index");
				var lt = s.css("z-index");
				if (N == 1) {
					var pt = -r.width;
					var ct = 70;
					var ht = "left center -" + r.height / 2
				} else {
					var pt = r.width;
					var ct = -70;
					var ht = "right center -" + r.height / 2
				}
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					k.add(punchgs.TweenLite.fromTo(n, C / 1500, {
						left: pt,
						rotationX: 40,
						z: -600,
						opacity: z,
						top: 0,
						force3D: "auto",
						transformPerspective: 600,
						transformOrigin: ht,
						rotationY: ct
					}, {
						left: 0,
						delay: t * 50 / 1e3,
						ease: punchgs.Power2.easeInOut
					}), 0);
					k.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						rotationX: 40,
						z: -600,
						opacity: z,
						top: 0,
						scale: 1,
						force3D: "auto",
						transformPerspective: 600,
						transformOrigin: ht,
						rotationY: ct
					}, {
						rotationX: 0,
						opacity: 1,
						top: 0,
						z: 0,
						scale: 1,
						rotationY: 0,
						delay: t * 50 / 1e3,
						ease: punchgs.Power2.easeInOut
					}), 0);
					k.add(punchgs.TweenLite.to(n, .1, {
						opacity: 1,
						force3D: "auto",
						delay: t * 50 / 1e3 + C / 2e3
					}), 0)
				});
				u.find(".slotslide").each(function(t) {
					var n = e(this);
					if (N != 1) {
						var i = -r.width;
						var s = 70;
						var o = "left center -" + r.height / 2
					} else {
						var i = r.width;
						var s = -70;
						var o = "right center -" + r.height / 2
					}
					k.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						opacity: 1,
						rotationX: 0,
						top: 0,
						z: 0,
						scale: 1,
						left: 0,
						force3D: "auto",
						transformPerspective: 600,
						transformOrigin: o,
						rotationY: 0
					}, {
						opacity: 1,
						rotationX: 40,
						top: 0,
						z: -600,
						left: i,
						force3D: "auto",
						scale: .8,
						rotationY: s,
						delay: t * 50 / 1e3,
						ease: punchgs.Power2.easeInOut
					}), 0);
					k.add(punchgs.TweenLite.to(n, .1, {
						force3D: "auto",
						opacity: 0,
						delay: t * 50 / 1e3 + (C / 1e3 - C / 1e4)
					}), 0)
				})
			}
			if (f == 21 || f == 25) {
				setTimeout(function() {
					u.find(".defaultimg").css({
						opacity: 0
					})
				}, 100);
				var ft = i.css("z-index");
				var lt = s.css("z-index");
				if (N == 1) {
					var pt = -r.width;
					var ct = 90;
					if (f == 25) {
						var ht = "center top 0";
						rot2 = -ct;
						ct = r.rotate
					} else {
						var ht = "left center 0";
						rot2 = r.rotate
					}
				} else {
					var pt = r.width;
					var ct = -90;
					if (f == 25) {
						var ht = "center bottom 0";
						rot2 = -ct;
						ct = r.rotate
					} else {
						var ht = "right center 0";
						rot2 = r.rotate
					}
				}
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					k.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						left: 0,
						transformStyle: "flat",
						rotationX: rot2,
						z: 0,
						autoAlpha: 0,
						top: 0,
						scale: 1,
						force3D: "auto",
						transformPerspective: 600,
						transformOrigin: ht,
						rotationY: ct
					}, {
						left: 0,
						rotationX: 0,
						top: 0,
						z: 0,
						autoAlpha: 1,
						scale: 1,
						rotationY: 0,
						force3D: "auto",
						ease: punchgs.Power3.easeInOut
					}), 0)
				});
				if (N != 1) {
					var pt = -r.width;
					var ct = 90;
					if (f == 25) {
						var ht = "center top 0";
						rot2 = -ct;
						ct = r.rotate
					} else {
						var ht = "left center 0";
						rot2 = r.rotate
					}
				} else {
					var pt = r.width;
					var ct = -90;
					if (f == 25) {
						var ht = "center bottom 0";
						rot2 = -ct;
						ct = r.rotate
					} else {
						var ht = "right center 0";
						rot2 = r.rotate
					}
				}
				u.find(".slotslide").each(function(t) {
					var n = e(this);
					k.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						left: 0,
						transformStyle: "flat",
						rotationX: 0,
						z: 0,
						autoAlpha: 1,
						top: 0,
						scale: 1,
						force3D: "auto",
						transformPerspective: 600,
						transformOrigin: ht,
						rotationY: 0
					}, {
						left: 0,
						rotationX: rot2,
						top: 0,
						z: 0,
						autoAlpha: 1,
						force3D: "auto",
						scale: 1,
						rotationY: ct,
						ease: punchgs.Power1.easeInOut
					}), 0)
				})
			}
			if (f == 23 || f == 24) {
				setTimeout(function() {
					u.find(".defaultimg").css({
						opacity: 0
					})
				}, 100);
				var ft = i.css("z-index");
				var lt = s.css("z-index");
				var ct = -90;
				if (N == 1) ct = 90;
				var z = 1;
				if (f == 23) {
					var ht = "center center -" + r.width / 2;
					z = 0
				} else {
					var ht = "center center " + r.width / 2
				}
				var dt = 0;
				punchgs.TweenLite.set(n, {
					transformStyle: "preserve-3d",
					backfaceVisibility: "hidden",
					perspective: 2500
				});
				a.find(".slotslide").each(function(t) {
					var n = e(this);
					k.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						left: dt,
						rotationX: r.rotate,
						force3D: "auto",
						opacity: z,
						top: 0,
						scale: 1,
						transformPerspective: 600,
						transformOrigin: ht,
						rotationY: ct
					}, {
						left: 0,
						rotationX: 0,
						autoAlpha: 1,
						top: 0,
						z: 0,
						scale: 1,
						rotationY: 0,
						delay: t * 50 / 500,
						ease: punchgs.Power2.easeInOut
					}), 0)
				});
				ct = 90;
				if (N == 1) ct = -90;
				u.find(".slotslide").each(function(t) {
					var n = e(this);
					k.add(punchgs.TweenLite.fromTo(n, C / 1e3, {
						left: 0,
						autoAlpha: 1,
						rotationX: 0,
						top: 0,
						z: 0,
						scale: 1,
						force3D: "auto",
						transformPerspective: 600,
						transformOrigin: ht,
						rotationY: 0
					}, {
						left: dt,
						autoAlpha: 1,
						rotationX: r.rotate,
						top: 0,
						scale: 1,
						rotationY: ct,
						delay: t * 50 / 500,
						ease: punchgs.Power2.easeInOut
					}), 0)
				})
			}
			k.pause();
			B(i, r, null, k);
			punchgs.TweenLite.to(i, .001, {
				autoAlpha: 1
			});
			var vt = {};
			vt.slideIndex = r.next + 1;
			vt.slide = i;
			n.trigger("revolution.slide.onchange", vt);
			setTimeout(function() {
				n.trigger("revolution.slide.onafterswap")
			}, C);
			n.trigger("revolution.slide.onvideostop")
		};
		var L = function(e, t, n, r, i, s, o) {
			punchgs.TweenLite.to(n.find(".defaultimg"), .001, {
				autoAlpha: 1,
				onComplete: function() {
					w(e, t, i)
				}
			});
			if (i.index() != s.index()) {
				punchgs.TweenLite.to(s, .2, {
					autoAlpha: 0,
					onComplete: function() {
						w(e, t, s)
					}
				})
			}
			t.act = t.next;
			if (t.navigationType == "thumb") nt(e);
			if (n.data("kenburns") == "on") {
				K(e, t)
			}
			e.find(".current-sr-slide-visible").removeClass("current-sr-slide-visible");
			i.addClass("current-sr-slide-visible");
			if (t.parallax == "scroll" || t.parallax == "scroll+mouse" || t.parallax == "mouse+scroll") {
				et(e, t)
			}
			o.clear()
		};
		var A = function(t) {
			var n = t.target.getVideoEmbedCode();
			var r = e("#" + n.split('id="')[1].split('"')[0]);
			var i = r.closest(".tp-simpleresponsive");
			var s = r.parent().data("player");
			if (t.data == YT.PlayerState.PLAYING) {
				var o = i.find(".tp-bannertimer");
				var u = o.data("opt");
				if (r.closest(".tp-caption").data("volume") == "mute") s.mute();
				u.videoplaying = true;
				i.trigger("stoptimer");
				i.trigger("revolution.slide.onvideoplay")
			} else {
				var o = i.find(".tp-bannertimer");
				var u = o.data("opt");
				if (t.data != -1) {
					u.videoplaying = false;
					i.trigger("playtimer");
					i.trigger("revolution.slide.onvideostop")
				}
			}
			if (t.data == 0 && u.nextslideatend == true) u.container.revnext()
		};
		var O = function(e, t, n) {
			if (e.addEventListener) e.addEventListener(t, n, false);
			else e.attachEvent(t, n, false)
		};
		var M = function(t, n) {
			var r = $f(t);
			var i = e("#" + t);
			var s = i.closest(".tp-simpleresponsive");
			r.addEvent("ready", function(e) {
				if (n) r.api("play");
				r.addEvent("play", function(e) {
					var t = s.find(".tp-bannertimer");
					var n = t.data("opt");
					n.videoplaying = true;
					s.trigger("stoptimer");
					if (i.closest(".tp-caption").data("volume") == "mute") r.api("setVolume", "0")
				});
				r.addEvent("finish", function(e) {
					var t = s.find(".tp-bannertimer");
					var n = t.data("opt");
					n.videoplaying = false;
					s.trigger("playtimer");
					s.trigger("revolution.slide.onvideoplay");
					if (n.nextslideatend == true) n.container.revnext()
				});
				r.addEvent("pause", function(e) {
					var t = s.find(".tp-bannertimer");
					var n = t.data("opt");
					n.videoplaying = false;
					s.trigger("playtimer");
					s.trigger("revolution.slide.onvideostop")
				})
			})
		};
		var _ = function(e, n) {
			var r = n.width();
			var i = n.height();
			var s = e.data("mediaAspect");
			if (s == t) s = 1;
			var o = r / i;
			e.css({
				position: "absolute"
			});
			var u = e.find("video");
			if (o < s) {
				e.width(i * s).height(i);
				punchgs.TweenLite.to(e, .01, {
					force3D: "auto",
					top: 0,
					left: 0 - (i * s - r) / 2,
					height: i
				})
			} else {
				e.width(r).height(r / s);
				punchgs.TweenLite.to(e, .01, {
					force3D: "auto",
					top: 0 - (r / s - i) / 2,
					left: 0,
					height: r / s
				})
			}
		};
		var D = function() {
			var e = new Object;
			e.x = 0;
			e.y = 0;
			e.rotationX = 0;
			e.rotationY = 0;
			e.rotationZ = 0;
			e.scale = 1;
			e.scaleX = 1;
			e.scaleY = 1;
			e.skewX = 0;
			e.skewY = 0;
			e.opacity = 0;
			e.transformOrigin = "center, center";
			e.transformPerspective = 400;
			e.rotation = 0;
			return e
		};
		var P = function(t, n) {
			var r = n.split(";");
			e.each(r, function(e, n) {
				n = n.split(":");
				var r = n[0],
					i = n[1];
				if (r == "rotationX") t.rotationX = parseInt(i, 0);
				if (r == "rotationY") t.rotationY = parseInt(i, 0);
				if (r == "rotationZ") t.rotationZ = parseInt(i, 0);
				if (r == "rotationZ") t.rotation = parseInt(i, 0);
				if (r == "scaleX") t.scaleX = parseFloat(i);
				if (r == "scaleY") t.scaleY = parseFloat(i);
				if (r == "opacity") t.opacity = parseFloat(i);
				if (r == "skewX") t.skewX = parseInt(i, 0);
				if (r == "skewY") t.skewY = parseInt(i, 0);
				if (r == "x") t.x = parseInt(i, 0);
				if (r == "y") t.y = parseInt(i, 0);
				if (r == "z") t.z = parseInt(i, 0);
				if (r == "transformOrigin") t.transformOrigin = i.toString();
				if (r == "transformPerspective") t.transformPerspective = parseInt(i, 0)
			});
			return t
		};
		var H = function(t) {
			var n = t.split("animation:");
			var r = new Object;
			r.animation = P(D(), n[1]);
			var i = n[0].split(";");
			e.each(i, function(e, t) {
				t = t.split(":");
				var n = t[0],
					i = t[1];
				if (n == "typ") r.typ = i;
				if (n == "speed") r.speed = parseInt(i, 0) / 1e3;
				if (n == "start") r.start = parseInt(i, 0) / 1e3;
				if (n == "elementdelay") r.elementdelay = parseFloat(i);
				if (n == "ease") r.ease = i
			});
			return r
		};
		var B = function(n, r, i, s) {
			if (n.data("ctl") == t) {
				n.data("ctl", new punchgs.TimelineLite)
			}
			var o = n.data("ctl"),
				u = 0,
				a = 0,
				f = n.find(".tp-caption"),
				l = r.container.find(".tp-static-layers").find(".tp-caption");
			o.pause();
			e.each(l, function(e, t) {
				f.push(t)
			});
			f.each(function(n) {
				var s = i,
					o = -1,
					f = e(this);
				if (f.hasClass("tp-static-layer")) {
					if (f.data("startslide") == -1 || f.data("startslide") == "-1") f.data("startslide", 0);
					if (f.data("endslide") == -1 || f.data("endslide") == "-1") f.data("endslide", r.slideamount);
					if (!f.hasClass("tp-is-shown")) {
						if (f.data("startslide") <= r.next && f.data("endslide") >= r.next || f.data("startslide") == r.next || f.data("endslide") == r.next) {
							f.addClass("tp-is-shown");
							o = 1
						} else {
							o = 0
						}
					} else {
						if (f.data("endslide") == r.next || f.data("startslide") > r.next || f.data("endslide") < r.next) {
							o = 2
						} else {
							o = 0
						}
					}
				}
				u = r.width / 2 - r.startwidth * r.bw / 2;
				var l = r.bw;
				var c = r.bh;
				if (r.fullScreen == "on") a = r.height / 2 - r.startheight * r.bh / 2;
				if (r.autoHeight == "on") a = r.container.height() / 2 - r.startheight * r.bh / 2;
				if (a < 0) a = 0;
				var h = 0;
				if (r.width < r.hideCaptionAtLimit && f.data("captionhidden") == "on") {
					f.addClass("tp-hidden-caption");
					h = 1
				} else {
					if (r.width < r.hideAllCaptionAtLimit || r.width < r.hideAllCaptionAtLilmit) {
						f.addClass("tp-hidden-caption");
						h = 1
					} else {
						f.removeClass("tp-hidden-caption")
					}
				}
				if (h == 0) {
					if (f.data("linktoslide") != t && !f.hasClass("hasclicklistener")) {
						f.addClass("hasclicklistener");
						f.css({
							cursor: "pointer"
						});
						if (f.data("linktoslide") != "no") {
							f.click(function() {
								var t = e(this);
								var n = t.data("linktoslide");
								if (n != "next" && n != "prev") {
									r.container.data("showus", n);
									r.container.parent().find(".tp-rightarrow").click()
								} else if (n == "next") r.container.parent().find(".tp-rightarrow").click();
								else if (n == "prev") r.container.parent().find(".tp-leftarrow").click()
							})
						}
					}
					if (u < 0) u = 0;
					var p = "iframe" + Math.round(Math.random() * 1e3 + 1);
					if (f.find("iframe").length > 0 || f.find("video").length > 0) {
						var d = false;
						if (f.data("autoplayonlyfirsttime") == true || f.data("autoplayonlyfirsttime") == "true" || f.data("autoplay") == true) {
							f.data("autoplay", true);
							d = true
						}
						f.find("iframe").each(function() {
							var n = e(this);
							if ($()) {
								var i = n.attr("src");
								n.attr("src", "");
								n.attr("src", i)
							}
							r.nextslideatend = f.data("nextslideatend");
							if (f.data("thumbimage") != t && f.data("thumbimage").length > 2 && f.data("autoplay") != true && !s) {
								f.find(".tp-thumb-image").remove();
								f.append('<div class="tp-thumb-image" style="cursor:pointer; position:absolute;top:0px;left:0px;width:100%;height:100%;background-image:url(' + f.data("thumbimage") + '); background-size:cover"></div>')
							}
							if (n.attr("src").toLowerCase().indexOf("youtube") >= 0) {
								if (!n.hasClass("HasListener")) {
									try {
										n.attr("id", p);
										var o;
										var u = setInterval(function() {
											if (YT != t)
												if (typeof YT.Player != t && typeof YT.Player != "undefined") {
													if (f.data("autoplay") == true || d) {
														o = new YT.Player(p, {
															events: {
																onStateChange: A,
																onReady: function(e) {
																	e.target.playVideo()
																}
															}
														})
													} else o = new YT.Player(p, {
														events: {
															onStateChange: A
														}
													});
													n.addClass("HasListener");
													f.data("player", o);
													clearInterval(u)
												}
										}, 100)
									} catch (a) {}
								} else {
									if (f.data("autoplay") == true || d) {
										var o = f.data("player");
										f.data("timerplay", setTimeout(function() {
											if (f.data("forcerewind") == "on") o.seekTo(0);
											o.playVideo()
										}, f.data("start")))
									}
								}
								f.find(".tp-thumb-image").click(function() {
									punchgs.TweenLite.to(e(this), .3, {
										opacity: 0,
										force3D: "auto",
										ease: punchgs.Power3.easeInOut,
										onComplete: function() {
											f.find(".tp-thumb-image").remove()
										}
									});
									if (!$()) {
										var t = f.data("player");
										t.playVideo()
									}
								})
							} else {
								if (n.attr("src").toLowerCase().indexOf("vimeo") >= 0) {
									if (!n.hasClass("HasListener")) {
										n.addClass("HasListener");
										n.attr("id", p);
										var l = n.attr("src");
										var c = {},
											h = l,
											v = /([^&=]+)=([^&]*)/g,
											m;
										while (m = v.exec(h)) {
											c[decodeURIComponent(m[1])] = decodeURIComponent(m[2])
										}
										if (c["player_id"] != t) l = l.replace(c["player_id"], p);
										else l = l + "&player_id=" + p;
										try {
											l = l.replace("api=0", "api=1")
										} catch (a) {}
										l = l + "&api=1";
										n.attr("src", l);
										var o = f.find("iframe")[0];
										var g = setInterval(function() {
											if ($f != t)
												if (typeof $f(p).api != t && typeof $f(p).api != "undefined") {
													$f(o).addEvent("ready", function() {
														M(p, d)
													});
													clearInterval(g)
												}
										}, 100)
									} else {
										if (f.data("autoplay") == true) {
											var n = f.find("iframe");
											var y = n.attr("id");
											var g = setInterval(function() {
												if ($f != t)
													if (typeof $f(y).api != t && typeof $f(y).api != "undefined") {
														var e = $f(y);
														f.data("timerplay", setTimeout(function() {
															if (f.data("forcerewind") == "on") e.api("seekTo", 0);
															e.api("play")
														}, f.data("start")));
														clearInterval(g)
													}
											}, 100)
										}
									}
									f.find(".tp-thumb-image").click(function() {
										punchgs.TweenLite.to(e(this), .3, {
											opacity: 0,
											force3D: "auto",
											ease: punchgs.Power3.easeInOut,
											onComplete: function() {
												f.find(".tp-thumb-image").remove()
											}
										});
										var n = f.find("iframe");
										var r = n.attr("id");
										var i = setInterval(function() {
											if ($f != t)
												if (typeof $f(r).api != t && typeof $f(r).api != "undefined") {
													var e = $f(r);
													e.api("play");
													clearInterval(i)
												}
										}, 100)
									})
								}
							}
						});
						if (f.find("video").length > 0) {
							f.find("video").each(function(n) {
								var i = e(this);
								var s = this;
								if (!i.parent().hasClass("html5vid")) {
									i.wrap('<div class="html5vid" style="position:relative;top:0px;left:0px;width:auto;height:auto"></div>')
								}
								var o = e(this).parent();
								if (s.addEventListener) s.addEventListener("loadedmetadata", function() {
									o.data("metaloaded", 1)
								});
								else s.attachEvent("loadedmetadata", function() {
									o.data("metaloaded", 1)
								});
								if (!i.hasClass("HasListener")) {
									i.addClass("HasListener");
									s.addEventListener("play", function() {
										o.addClass("videoisplaying");
										o.find(".tp-poster").remove();
										if (f.data("volume") == "mute") s.muted = true;
										r.container.trigger("revolution.slide.onvideoplay");
										r.videoplaying = true;
										r.container.trigger("stoptimer")
									});
									s.addEventListener("pause", function() {
										o.removeClass("videoisplaying");
										r.videoplaying = false;
										r.container.trigger("playtimer");
										r.container.trigger("revolution.slide.onvideostop")
									});
									s.addEventListener("ended", function() {
										o.removeClass("videoisplaying");
										r.videoplaying = false;
										r.container.trigger("playtimer");
										r.container.trigger("revolution.slide.onvideostop");
										if (r.nextslideatend == true) r.container.revnext()
									})
								}
								if (i.attr("poster") != t && o.find(".tp-poster").length == 0) o.append('<div class="tp-poster" style="position:absolute;z-index:1;width:100%;height:100%;top:0px;left:0px;background:url(' + i.attr("poster") + '); background-position:center center;background-size:100%;background-repeat:no-repeat;"></div>');
								if (i.attr("control") == t && o.find(".tp-video-play-button").length == 0) {
									o.append('<div class="tp-video-play-button"><i class="revicon-right-dir"></i><div class="tp-revstop"></div></div>');
									o.find(".tp-video-play-button").click(function() {
										if (o.hasClass("videoisplaying")) s.pause();
										else s.play()
									})
								}
								if (i.attr("control") == t) {
									o.find("video, .tp-poster").click(function() {
										if (o.hasClass("videoisplaying")) s.pause();
										else s.play()
									})
								}
								if (f.data("forcecover") == 1) {
									_(o, r.container);
									o.addClass("fullcoveredvideo");
									f.addClass("fullcoveredvideo")
								}
								if (f.data("forcecover") == 1 || f.hasClass("fullscreenvideo")) {
									o.css({
										width: "100%",
										height: "100%"
									})
								}
								var u = false;
								if (f.data("autoplayonlyfirsttime") == true || f.data("autoplayonlyfirsttime") == "true") {
									u = true
								}
								clearInterval(o.data("interval"));
								o.data("interval", setInterval(function() {
									if (o.data("metaloaded") == 1 || s.duration != NaN) {
										clearInterval(o.data("interval"));
										if (f.data("dottedoverlay") != "none" && f.data("dottedoverlay") != t)
											if (f.find(".tp-dottedoverlay").length != 1) o.append('<div class="tp-dottedoverlay ' + f.data("dottedoverlay") + '"></div>');
										var n = 16 / 9;
										if (f.data("aspectratio") == "4:3") n = 4 / 3;
										o.data("mediaAspect", n);
										if (o.closest(".tp-caption").data("forcecover") == 1) {
											_(o, r.container);
											o.addClass("fullcoveredvideo")
										}
										i.css({
											display: "block"
										});
										r.nextslideatend = f.data("nextslideatend");
										if (f.data("autoplay") == true || u == true) {
											var a = e("body").find("#" + r.container.attr("id")).find(".tp-bannertimer");
											setTimeout(function() {
												r.videoplaying = true;
												r.container.trigger("stoptimer")
											}, 200);
											if (f.data("forcerewind") == "on" && !o.hasClass("videoisplaying"))
												if (s.currentTime > 0) s.currentTime = 0;
											if (f.data("volume") == "mute") s.muted = true;
											o.data("timerplay", setTimeout(function() {
												if (f.data("forcerewind") == "on" && !o.hasClass("videoisplaying"))
													if (s.currentTime > 0) s.currentTime = 0;
												if (f.data("volume") == "mute") s.muted = true;
												setTimeout(function() {
													s.play()
												}, 500)
											}, 10 + f.data("start")))
										}
										if (o.data("ww") == t) o.data("ww", i.attr("width"));
										if (o.data("hh") == t) o.data("hh", i.attr("height"));
										if (!f.hasClass("fullscreenvideo") && f.data("forcecover") == 1) {
											try {
												o.width(o.data("ww") * r.bw);
												o.height(o.data("hh") * r.bh)
											} catch (l) {}
										}
										clearInterval(o.data("interval"))
									}
								}), 100)
							})
						}
						if (f.data("autoplay") == true) {
							var v = e("body").find("#" + r.container.attr("id")).find(".tp-bannertimer");
							setTimeout(function() {
								r.videoplaying = true;
								r.container.trigger("stoptimer")
							}, 200);
							r.videoplaying = true;
							r.container.trigger("stoptimer");
							if (f.data("autoplayonlyfirsttime") == true || f.data("autoplayonlyfirsttime") == "true") {
								f.data("autoplay", false);
								f.data("autoplayonlyfirsttime", false)
							}
						}
					}
					var m = 0;
					var g = 0;
					if (f.find("img").length > 0) {
						var y = f.find("img");
						if (y.width() == 0) y.css({
							width: "auto"
						});
						if (y.height() == 0) y.css({
							height: "auto"
						});
						if (y.data("ww") == t && y.width() > 0) y.data("ww", y.width());
						if (y.data("hh") == t && y.height() > 0) y.data("hh", y.height());
						var b = y.data("ww");
						var w = y.data("hh");
						if (b == t) b = 0;
						if (w == t) w = 0;
						y.width(b * r.bw);
						y.height(w * r.bh);
						m = y.width();
						g = y.height()
					} else {
						if (f.find("iframe").length > 0 || f.find("video").length > 0) {
							var E = false;
							var y = f.find("iframe");
							if (y.length == 0) {
								y = f.find("video");
								E = true
							}
							y.css({
								display: "block"
							});
							if (f.data("ww") == t) f.data("ww", y.width());
							if (f.data("hh") == t) f.data("hh", y.height());
							var b = f.data("ww");
							var w = f.data("hh");
							var S = f;
							if (S.data("fsize") == t) S.data("fsize", parseInt(S.css("font-size"), 0) || 0);
							if (S.data("pt") == t) S.data("pt", parseInt(S.css("paddingTop"), 0) || 0);
							if (S.data("pb") == t) S.data("pb", parseInt(S.css("paddingBottom"), 0) || 0);
							if (S.data("pl") == t) S.data("pl", parseInt(S.css("paddingLeft"), 0) || 0);
							if (S.data("pr") == t) S.data("pr", parseInt(S.css("paddingRight"), 0) || 0);
							if (S.data("mt") == t) S.data("mt", parseInt(S.css("marginTop"), 0) || 0);
							if (S.data("mb") == t) S.data("mb", parseInt(S.css("marginBottom"), 0) || 0);
							if (S.data("ml") == t) S.data("ml", parseInt(S.css("marginLeft"), 0) || 0);
							if (S.data("mr") == t) S.data("mr", parseInt(S.css("marginRight"), 0) || 0);
							if (S.data("bt") == t) S.data("bt", parseInt(S.css("borderTop"), 0) || 0);
							if (S.data("bb") == t) S.data("bb", parseInt(S.css("borderBottom"), 0) || 0);
							if (S.data("bl") == t) S.data("bl", parseInt(S.css("borderLeft"), 0) || 0);
							if (S.data("br") == t) S.data("br", parseInt(S.css("borderRight"), 0) || 0);
							if (S.data("lh") == t) S.data("lh", parseInt(S.css("lineHeight"), 0) || 0);
							var x = r.width;
							var T = r.height;
							if (x > r.startwidth) x = r.startwidth;
							if (T > r.startheight) T = r.startheight;
							if (!f.hasClass("fullscreenvideo")) f.css({
								"font-size": S.data("fsize") * r.bw + "px",
								"padding-top": S.data("pt") * r.bh + "px",
								"padding-bottom": S.data("pb") * r.bh + "px",
								"padding-left": S.data("pl") * r.bw + "px",
								"padding-right": S.data("pr") * r.bw + "px",
								"margin-top": S.data("mt") * r.bh + "px",
								"margin-bottom": S.data("mb") * r.bh + "px",
								"margin-left": S.data("ml") * r.bw + "px",
								"margin-right": S.data("mr") * r.bw + "px",
								"border-top": S.data("bt") * r.bh + "px",
								"border-bottom": S.data("bb") * r.bh + "px",
								"border-left": S.data("bl") * r.bw + "px",
								"border-right": S.data("br") * r.bw + "px",
								"line-height": S.data("lh") * r.bh + "px",
								height: w * r.bh + "px"
							});
							else {
								u = 0;
								a = 0;
								f.data("x", 0);
								f.data("y", 0);
								var N = r.height;
								if (r.autoHeight == "on") N = r.container.height();
								f.css({
									width: r.width,
									height: N
								})
							}
							if (E == false) {
								y.width(b * r.bw);
								y.height(w * r.bh)
							} else if (f.data("forcecover") != 1 && !f.hasClass("fullscreenvideo")) {
								y.width(b * r.bw);
								y.height(w * r.bh)
							}
							m = y.width();
							g = y.height()
						} else {
							f.find(".tp-resizeme, .tp-resizeme *").each(function() {
								I(e(this), r)
							});
							if (f.hasClass("tp-resizeme")) {
								f.find("*").each(function() {
									I(e(this), r)
								})
							}
							I(f, r);
							g = f.outerHeight(true);
							m = f.outerWidth(true);
							var C = f.outerHeight();
							var k = f.css("backgroundColor");
							f.find(".frontcorner").css({
								borderWidth: C + "px",
								left: 0 - C + "px",
								borderRight: "0px solid transparent",
								borderTopColor: k
							});
							f.find(".frontcornertop").css({
								borderWidth: C + "px",
								left: 0 - C + "px",
								borderRight: "0px solid transparent",
								borderBottomColor: k
							});
							f.find(".backcorner").css({
								borderWidth: C + "px",
								right: 0 - C + "px",
								borderLeft: "0px solid transparent",
								borderBottomColor: k
							});
							f.find(".backcornertop").css({
								borderWidth: C + "px",
								right: 0 - C + "px",
								borderLeft: "0px solid transparent",
								borderTopColor: k
							})
						}
					}
					if (r.fullScreenAlignForce == "on") {
						u = 0;
						a = 0
					}
					if (f.data("voffset") == t) f.data("voffset", 0);
					if (f.data("hoffset") == t) f.data("hoffset", 0);
					var L = f.data("voffset") * l;
					var O = f.data("hoffset") * l;
					var B = r.startwidth * l;
					var F = r.startheight * l;
					if (r.fullScreenAlignForce == "on") {
						B = r.container.width();
						F = r.container.height()
					}
					if (f.data("x") == "center" || f.data("xcenter") == "center") {
						f.data("xcenter", "center");
						f.data("x", B / 2 - f.outerWidth(true) / 2 + O)
					}
					if (f.data("x") == "left" || f.data("xleft") == "left") {
						f.data("xleft", "left");
						f.data("x", 0 / l + O)
					}
					if (f.data("x") == "right" || f.data("xright") == "right") {
						f.data("xright", "right");
						f.data("x", (B - f.outerWidth(true) + O) / l)
					}
					if (f.data("y") == "center" || f.data("ycenter") == "center") {
						f.data("ycenter", "center");
						f.data("y", F / 2 - f.outerHeight(true) / 2 + L)
					}
					if (f.data("y") == "top" || f.data("ytop") == "top") {
						f.data("ytop", "top");
						f.data("y", 0 / r.bh + L)
					}
					if (f.data("y") == "bottom" || f.data("ybottom") == "bottom") {
						f.data("ybottom", "bottom");
						f.data("y", (F - f.outerHeight(true) + L) / l)
					}
					if (f.data("start") == t) f.data("start", 1e3);
					var U = f.data("easing");
					if (U == t) U = "punchgs.Power1.easeOut";
					var X = f.data("start") / 1e3;
					var V = f.data("speed") / 1e3;
					if (f.data("x") == "center" || f.data("xcenter") == "center") var J = f.data("x") + u;
					else {
						var J = l * f.data("x") + u
					}
					if (f.data("y") == "center" || f.data("ycenter") == "center") var K = f.data("y") + a;
					else {
						var K = r.bh * f.data("y") + a
					}
					punchgs.TweenLite.set(f, {
						top: K,
						left: J,
						overwrite: "auto"
					});
					if (o == 0) s = true;
					if (f.data("timeline") != t && !s) {
						f.data("timeline").gotoAndPlay(0);
						s = true
					}
					if (!s) {
						if (f.data("timeline") != t) {}

						function Q() {}

						function G() {}
						var Y = new punchgs.TimelineLite({
							smoothChildTiming: true,
							onStart: G
						});
						Y.pause();
						if (r.fullScreenAlignForce == "on") {}
						var Z = f;
						if (f.data("mySplitText") != t) f.data("mySplitText").revert();
						if (f.data("splitin") == "chars" || f.data("splitin") == "words" || f.data("splitin") == "lines" || f.data("splitout") == "chars" || f.data("splitout") == "words" || f.data("splitout") == "lines") {
							if (f.find("a").length > 0) f.data("mySplitText", new punchgs.SplitText(f.find("a"), {
								type: "lines,words,chars",
								charsClass: "tp-splitted",
								wordsClass: "tp-splitted",
								linesClass: "tp-splitted"
							}));
							else if (f.find(".tp-layer-inner-rotation").length > 0) f.data("mySplitText", new punchgs.SplitText(f.find(".tp-layer-inner-rotation"), {
								type: "lines,words,chars",
								charsClass: "tp-splitted",
								wordsClass: "tp-splitted",
								linesClass: "tp-splitted"
							}));
							else f.data("mySplitText", new punchgs.SplitText(f, {
									type: "lines,words,chars",
									charsClass: "tp-splitted",
									wordsClass: "tp-splitted",
									linesClass: "tp-splitted"
								}));
							f.addClass("splitted")
						}
						if (f.data("splitin") == "chars") Z = f.data("mySplitText").chars;
						if (f.data("splitin") == "words") Z = f.data("mySplitText").words;
						if (f.data("splitin") == "lines") Z = f.data("mySplitText").lines;
						var et = D();
						var tt = D();
						if (f.data("repeat") != t) repeatV = f.data("repeat");
						if (f.data("yoyo") != t) yoyoV = f.data("yoyo");
						if (f.data("repeatdelay") != t) repeatdelayV = f.data("repeatdelay");
						if (f.hasClass("customin")) et = P(et, f.data("customin"));
						else if (f.hasClass("randomrotate")) {
							et.scale = Math.random() * 3 + 1;
							et.rotation = Math.round(Math.random() * 200 - 100);
							et.x = Math.round(Math.random() * 200 - 100);
							et.y = Math.round(Math.random() * 200 - 100)
						} else if (f.hasClass("lfr") || f.hasClass("skewfromright")) et.x = 15 + r.width;
						else if (f.hasClass("lfl") || f.hasClass("skewfromleft")) et.x = -15 - m;
						else if (f.hasClass("sfl") || f.hasClass("skewfromleftshort")) et.x = -50;
						else if (f.hasClass("sfr") || f.hasClass("skewfromrightshort")) et.x = 50;
						else if (f.hasClass("lft")) et.y = -25 - g;
						else if (f.hasClass("lfb")) et.y = 25 + r.height;
						else if (f.hasClass("sft")) et.y = -50;
						else if (f.hasClass("sfb")) et.y = 50;
						if (f.hasClass("skewfromright") || f.hasClass("skewfromrightshort")) et.skewX = -85;
						else if (f.hasClass("skewfromleft") || f.hasClass("skewfromleftshort")) et.skewX = 85;
						if (f.hasClass("fade") || f.hasClass("sft") || f.hasClass("sfl") || f.hasClass("sfb") || f.hasClass("skewfromleftshort") || f.hasClass("sfr") || f.hasClass("skewfromrightshort")) et.opacity = 0;
						if (j().toLowerCase() == "safari") {}
						var nt = f.data("elementdelay") == t ? 0 : f.data("elementdelay");
						tt.ease = et.ease = f.data("easing") == t ? punchgs.Power1.easeInOut : f.data("easing");
						et.data = new Object;
						et.data.oldx = et.x;
						et.data.oldy = et.y;
						tt.data = new Object;
						tt.data.oldx = tt.x;
						tt.data.oldy = tt.y;
						et.x = et.x * l;
						et.y = et.y * l;
						var rt = new punchgs.TimelineLite;
						if (o != 2) {
							if (f.hasClass("customin")) {
								if (Z != f) Y.add(punchgs.TweenLite.set(f, {
									force3D: "auto",
									opacity: 1,
									scaleX: 1,
									scaleY: 1,
									rotationX: 0,
									rotationY: 0,
									rotationZ: 0,
									skewX: 0,
									skewY: 0,
									z: 0,
									x: 0,
									y: 0,
									visibility: "visible",
									opacity: 1,
									delay: 0,
									overwrite: "all"
								}));
								et.visibility = "hidden";
								tt.visibility = "visible";
								tt.overwrite = "all";
								tt.opacity = 1;
								tt.onComplete = Q();
								tt.delay = X;
								tt.force3D = "auto";
								Y.add(rt.staggerFromTo(Z, V, et, tt, nt), "frame0")
							} else {
								et.visibility = "visible";
								et.transformPerspective = 600;
								if (Z != f) Y.add(punchgs.TweenLite.set(f, {
									force3D: "auto",
									opacity: 1,
									scaleX: 1,
									scaleY: 1,
									rotationX: 0,
									rotationY: 0,
									rotationZ: 0,
									skewX: 0,
									skewY: 0,
									z: 0,
									x: 0,
									y: 0,
									visibility: "visible",
									opacity: 1,
									delay: 0,
									overwrite: "all"
								}));
								tt.visibility = "visible";
								tt.delay = X;
								tt.onComplete = Q();
								tt.opacity = 1;
								tt.force3D = "auto";
								if (f.hasClass("randomrotate") && Z != f) {
									for (var n = 0; n < Z.length; n++) {
										var it = new Object;
										var st = new Object;
										e.extend(it, et);
										e.extend(st, tt);
										et.scale = Math.random() * 3 + 1;
										et.rotation = Math.round(Math.random() * 200 - 100);
										et.x = Math.round(Math.random() * 200 - 100);
										et.y = Math.round(Math.random() * 200 - 100);
										if (n != 0) st.delay = X + n * nt;
										Y.append(punchgs.TweenLite.fromTo(Z[n], V, it, st), "frame0")
									}
								} else Y.add(rt.staggerFromTo(Z, V, et, tt, nt), "frame0")
							}
						}
						f.data("timeline", Y);
						var ot = new Array;
						if (f.data("frames") != t) {
							var ut = f.data("frames");
							ut = ut.replace(/\s+/g, "");
							ut = ut.replace("{", "");
							var at = ut.split("}");
							e.each(at, function(e, t) {
								if (t.length > 0) {
									var n = H(t);
									z(f, r, n, "frame" + (e + 10), l)
								}
							})
						}
						Y = f.data("timeline");
						if (f.data("end") != t && (o == -1 || o == 2)) {
							W(f, r, f.data("end") / 1e3, et, "frame99", l)
						} else {
							if (o == -1 || o == 2) W(f, r, 999999, et, "frame99", l);
							else W(f, r, 200, et, "frame99", l)
						}
						Y = f.data("timeline");
						f.data("timeline", Y);
						q(f, l);
						Y.resume()
					}
				}
				if (s) {
					R(f);
					q(f, l);
					if (f.data("timeline") != t) {
						var ft = f.data("timeline").getTweensOf();
						e.each(ft, function(e, n) {
							if (n.vars.data != t) {
								var r = n.vars.data.oldx * l;
								var i = n.vars.data.oldy * l;
								if (n.progress() != 1 && n.progress() != 0) {
									try {
										n.vars.x = r;
										n.vary.y = i
									} catch (s) {}
								} else {
									if (n.progress() == 1) {
										punchgs.TweenLite.set(n.target, {
											x: r,
											y: i
										})
									}
								}
							}
						})
					}
				}
			});
			var c = e("body").find("#" + r.container.attr("id")).find(".tp-bannertimer");
			c.data("opt", r);
			if (s != t) setTimeout(function() {
				s.resume()
			}, 30)
		};
		var j = function() {
			var e = navigator.appName,
				t = navigator.userAgent,
				n;
			var r = t.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
			if (r && (n = t.match(/version\/([\.\d]+)/i)) != null) r[2] = n[1];
			r = r ? [r[1], r[2]] : [e, navigator.appVersion, "-?"];
			return r[0]
		};
		var F = function() {
			var e = navigator.appName,
				t = navigator.userAgent,
				n;
			var r = t.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
			if (r && (n = t.match(/version\/([\.\d]+)/i)) != null) r[2] = n[1];
			r = r ? [r[1], r[2]] : [e, navigator.appVersion, "-?"];
			return r[1]
		};
		var I = function(e, n) {
			if (e.data("fsize") == t) e.data("fsize", parseInt(e.css("font-size"), 0) || 0);
			if (e.data("pt") == t) e.data("pt", parseInt(e.css("paddingTop"), 0) || 0);
			if (e.data("pb") == t) e.data("pb", parseInt(e.css("paddingBottom"), 0) || 0);
			if (e.data("pl") == t) e.data("pl", parseInt(e.css("paddingLeft"), 0) || 0);
			if (e.data("pr") == t) e.data("pr", parseInt(e.css("paddingRight"), 0) || 0);
			if (e.data("mt") == t) e.data("mt", parseInt(e.css("marginTop"), 0) || 0);
			if (e.data("mb") == t) e.data("mb", parseInt(e.css("marginBottom"), 0) || 0);
			if (e.data("ml") == t) e.data("ml", parseInt(e.css("marginLeft"), 0) || 0);
			if (e.data("mr") == t) e.data("mr", parseInt(e.css("marginRight"), 0) || 0);
			if (e.data("bt") == t) e.data("bt", parseInt(e.css("borderTopWidth"), 0) || 0);
			if (e.data("bb") == t) e.data("bb", parseInt(e.css("borderBottomWidth"), 0) || 0);
			if (e.data("bl") == t) e.data("bl", parseInt(e.css("borderLeftWidth"), 0) || 0);
			if (e.data("br") == t) e.data("br", parseInt(e.css("borderRightWidth"), 0) || 0);
			if (e.data("ls") == t) e.data("ls", parseInt(e.css("letterSpacing"), 0) || 0);
			if (e.data("lh") == t) e.data("lh", parseInt(e.css("lineHeight"), 0) || "auto");
			if (e.data("minwidth") == t) e.data("minwidth", parseInt(e.css("minWidth"), 0) || 0);
			if (e.data("minheight") == t) e.data("minheight", parseInt(e.css("minHeight"), 0) || 0);
			if (e.data("maxwidth") == t) e.data("maxwidth", parseInt(e.css("maxWidth"), 0) || "none");
			if (e.data("maxheight") == t) e.data("maxheight", parseInt(e.css("maxHeight"), 0) || "none");
			if (e.data("wii") == t) e.data("wii", parseInt(e.css("width"), 0) || 0);
			if (e.data("hii") == t) e.data("hii", parseInt(e.css("height"), 0) || 0);
			if (e.data("wan") == t) e.data("wan", e.css("-webkit-transition"));
			if (e.data("moan") == t) e.data("moan", e.css("-moz-animation-transition"));
			if (e.data("man") == t) e.data("man", e.css("-ms-animation-transition"));
			if (e.data("ani") == t) e.data("ani", e.css("transition"));
			if (!e.hasClass("tp-splitted")) {
				e.css("-webkit-transition", "none");
				e.css("-moz-transition", "none");
				e.css("-ms-transition", "none");
				e.css("transition", "none");
				punchgs.TweenLite.set(e, {
					fontSize: Math.round(e.data("fsize") * n.bw) + "px",
					letterSpacing: Math.floor(e.data("ls") * n.bw) + "px",
					paddingTop: Math.round(e.data("pt") * n.bh) + "px",
					paddingBottom: Math.round(e.data("pb") * n.bh) + "px",
					paddingLeft: Math.round(e.data("pl") * n.bw) + "px",
					paddingRight: Math.round(e.data("pr") * n.bw) + "px",
					marginTop: e.data("mt") * n.bh + "px",
					marginBottom: e.data("mb") * n.bh + "px",
					marginLeft: e.data("ml") * n.bw + "px",
					marginRight: e.data("mr") * n.bw + "px",
					borderTopWidth: Math.round(e.data("bt") * n.bh) + "px",
					borderBottomWidth: Math.round(e.data("bb") * n.bh) + "px",
					borderLeftWidth: Math.round(e.data("bl") * n.bw) + "px",
					borderRightWidth: Math.round(e.data("br") * n.bw) + "px",
					lineHeight: Math.round(e.data("lh") * n.bh) + "px",
					minWidth: e.data("minwidth") * n.bw + "px",
					minHeight: e.data("minheight") * n.bh + "px",
					overwrite: "auto"
				});
				setTimeout(function() {
					e.css("-webkit-transition", e.data("wan"));
					e.css("-moz-transition", e.data("moan"));
					e.css("-ms-transition", e.data("man"));
					e.css("transition", e.data("ani"))
				}, 30);
				if (e.data("maxheight") != "none") e.css({
					maxHeight: e.data("maxheight") * n.bh + "px"
				});
				if (e.data("maxwidth") != "none") e.css({
					maxWidth: e.data("maxwidth") * n.bw + "px"
				})
			}
		};
		var q = function(n, r) {
			n.find(".rs-pendulum").each(function() {
				var n = e(this);
				if (n.data("timeline") == t) {
					n.data("timeline", new punchgs.TimelineLite);
					var i = n.data("startdeg") == t ? -20 : n.data("startdeg"),
						s = n.data("enddeg") == t ? 20 : n.data("enddeg");
					speed = n.data("speed") == t ? 2 : n.data("speed"), origin = n.data("origin") == t ? "50% 50%" : n.data("origin"), easing = n.data("ease") == t ? punchgs.Power2.easeInOut : n.data("ease");
					i = i * r;
					s = s * r;
					n.data("timeline").append(new punchgs.TweenLite.fromTo(n, speed, {
						force3D: "auto",
						rotation: i,
						transformOrigin: origin
					}, {
						rotation: s,
						ease: easing
					}));
					n.data("timeline").append(new punchgs.TweenLite.fromTo(n, speed, {
						force3D: "auto",
						rotation: s,
						transformOrigin: origin
					}, {
						rotation: i,
						ease: easing,
						onComplete: function() {
							n.data("timeline").restart()
						}
					}))
				}
			});
			n.find(".rs-slideloop").each(function() {
				var n = e(this);
				if (n.data("timeline") == t) {
					n.data("timeline", new punchgs.TimelineLite);
					var i = n.data("xs") == t ? 0 : n.data("xs"),
						s = n.data("ys") == t ? 0 : n.data("ys");
					xe = n.data("xe") == t ? 0 : n.data("xe"), ye = n.data("ye") == t ? 0 : n.data("ye"), speed = n.data("speed") == t ? 2 : n.data("speed"), easing = n.data("ease") == t ? punchgs.Power2.easeInOut : n.data("ease");
					i = i * r;
					s = s * r;
					xe = xe * r;
					ye = ye * r;
					n.data("timeline").append(new punchgs.TweenLite.fromTo(n, speed, {
						force3D: "auto",
						x: i,
						y: s
					}, {
						x: xe,
						y: ye,
						ease: easing
					}));
					n.data("timeline").append(new punchgs.TweenLite.fromTo(n, speed, {
						force3D: "auto",
						x: xe,
						y: ye
					}, {
						x: i,
						y: s,
						onComplete: function() {
							n.data("timeline").restart()
						}
					}))
				}
			});
			n.find(".rs-pulse").each(function() {
				var n = e(this);
				if (n.data("timeline") == t) {
					n.data("timeline", new punchgs.TimelineLite);
					var r = n.data("zoomstart") == t ? 0 : n.data("zoomstart"),
						i = n.data("zoomend") == t ? 0 : n.data("zoomend");
					speed = n.data("speed") == t ? 2 : n.data("speed"), easing = n.data("ease") == t ? punchgs.Power2.easeInOut : n.data("ease");
					n.data("timeline").append(new punchgs.TweenLite.fromTo(n, speed, {
						force3D: "auto",
						scale: r
					}, {
						scale: i,
						ease: easing
					}));
					n.data("timeline").append(new punchgs.TweenLite.fromTo(n, speed, {
						force3D: "auto",
						scale: i
					}, {
						scale: r,
						onComplete: function() {
							n.data("timeline").restart()
						}
					}))
				}
			});
			n.find(".rs-wave").each(function() {
				var n = e(this);
				if (n.data("timeline") == t) {
					n.data("timeline", new punchgs.TimelineLite);
					var i = n.data("angle") == t ? 10 : n.data("angle"),
						s = n.data("radius") == t ? 10 : n.data("radius"),
						o = n.data("speed") == t ? -20 : n.data("speed"),
						u = n.data("origin") == t ? -20 : n.data("origin");
					i = i * r;
					s = s * r;
					var a = {
						a: 0,
						ang: i,
						element: n,
						unit: s
					};
					n.data("timeline").append(new punchgs.TweenLite.fromTo(a, o, {
						a: 360
					}, {
						a: 0,
						force3D: "auto",
						ease: punchgs.Linear.easeNone,
						onUpdate: function() {
							var e = a.a * (Math.PI / 180);
							punchgs.TweenLite.to(a.element, .1, {
								force3D: "auto",
								x: Math.cos(e) * a.unit,
								y: a.unit * (1 - Math.sin(e))
							})
						},
						onComplete: function() {
							n.data("timeline").restart()
						}
					}))
				}
			})
		};
		var R = function(n) {
			n.find(".rs-pendulum, .rs-slideloop, .rs-pulse, .rs-wave").each(function() {
				var n = e(this);
				if (n.data("timeline") != t) {
					n.data("timeline").pause();
					n.data("timeline", null)
				}
			})
		};
		var U = function(n, r) {
			var i = 0;
			var s = n.find(".tp-caption"),
				o = r.container.find(".tp-static-layers").find(".tp-caption");
			e.each(o, function(e, t) {
				s.push(t)
			});
			s.each(function(n) {
				var s = -1;
				var o = e(this);
				if (o.hasClass("tp-static-layer")) {
					if (o.data("startslide") == -1 || o.data("startslide") == "-1") o.data("startslide", 0);
					if (o.data("endslide") == -1 || o.data("endslide") == "-1") o.data("endslide", r.slideamount);
					if (o.hasClass("tp-is-shown")) {
						if (o.data("startslide") > r.next || o.data("endslide") < r.next) {
							s = 2;
							o.removeClass("tp-is-shown")
						} else {
							s = 0
						}
					} else {
						s = 2
					}
				}
				if (s != 0) {
					R(o);
					if (o.find("iframe").length > 0) {
						try {
							var u = o.find("iframe");
							var a = u.attr("id");
							var f = $f(a);
							f.api("pause");
							clearTimeout(o.data("timerplay"))
						} catch (l) {}
						try {
							var c = o.data("player");
							c.stopVideo();
							clearTimeout(o.data("timerplay"))
						} catch (l) {}
					}
					if (o.find("video").length > 0) {
						try {
							o.find("video").each(function(t) {
								var n = e(this).parent();
								var r = n.attr("id");
								clearTimeout(n.data("timerplay"));
								var i = this;
								i.pause()
							})
						} catch (l) {}
					}
					try {
						var h = o.data("timeline");
						var p = h.getLabelTime("frame99");
						var d = h.time();
						if (p > d) {
							var v = h.getTweensOf(o);
							e.each(v, function(e, t) {
								if (e != 0) t.pause()
							});
							if (o.css("opacity") != 0) {
								var m = o.data("endspeed") == t ? o.data("speed") : o.data("endspeed");
								if (m > i) i = m;
								h.play("frame99")
							} else h.progress(1, false)
						}
					} catch (l) {}
				}
			});
			return i
		};
		var z = function(e, n, r, i, s) {
			var o = e.data("timeline");
			var u = new punchgs.TimelineLite;
			var a = e;
			if (r.typ == "chars") a = e.data("mySplitText").chars;
			else if (r.typ == "words") a = e.data("mySplitText").words;
			else if (r.typ == "lines") a = e.data("mySplitText").lines;
			r.animation.ease = r.ease;
			if (r.animation.rotationZ != t) r.animation.rotation = r.animation.rotationZ;
			r.animation.data = new Object;
			r.animation.data.oldx = r.animation.x;
			r.animation.data.oldy = r.animation.y;
			r.animation.x = r.animation.x * s;
			r.animation.y = r.animation.y * s;
			o.add(u.staggerTo(a, r.speed, r.animation, r.elementdelay), r.start);
			o.addLabel(i, r.start);
			e.data("timeline", o)
		};
		var W = function(e, n, r, i, s, o) {
			var u = e.data("timeline");
			var a = new punchgs.TimelineLite;
			var f = D();
			var l = e.data("endspeed") == t ? e.data("speed") : e.data("endspeed");
			f.ease = e.data("endeasing") == t ? punchgs.Power1.easeInOut : e.data("endeasing");
			l = l / 1e3;
			if (e.hasClass("ltr") || e.hasClass("ltl") || e.hasClass("str") || e.hasClass("stl") || e.hasClass("ltt") || e.hasClass("ltb") || e.hasClass("stt") || e.hasClass("stb") || e.hasClass("skewtoright") || e.hasClass("skewtorightshort") || e.hasClass("skewtoleft") || e.hasClass("skewtoleftshort") || e.hasClass("fadeout") || e.hasClass("randomrotateout")) {
				if (e.hasClass("skewtoright") || e.hasClass("skewtorightshort")) f.skewX = 35;
				else if (e.hasClass("skewtoleft") || e.hasClass("skewtoleftshort")) f.skewX = -35;
				if (e.hasClass("ltr") || e.hasClass("skewtoright")) f.x = n.width + 60;
				else if (e.hasClass("ltl") || e.hasClass("skewtoleft")) f.x = 0 - (n.width + 60);
				else if (e.hasClass("ltt")) f.y = 0 - (n.height + 60);
				else if (e.hasClass("ltb")) f.y = n.height + 60;
				else if (e.hasClass("str") || e.hasClass("skewtorightshort")) {
					f.x = 50;
					f.opacity = 0
				} else if (e.hasClass("stl") || e.hasClass("skewtoleftshort")) {
					f.x = -50;
					f.opacity = 0
				} else if (e.hasClass("stt")) {
					f.y = -50;
					f.opacity = 0
				} else if (e.hasClass("stb")) {
					f.y = 50;
					f.opacity = 0
				} else if (e.hasClass("randomrotateout")) {
					f.x = Math.random() * n.width;
					f.y = Math.random() * n.height;
					f.scale = Math.random() * 2 + .3;
					f.rotation = Math.random() * 360 - 180;
					f.opacity = 0
				} else if (e.hasClass("fadeout")) {
					f.opacity = 0
				}
				if (e.hasClass("skewtorightshort")) f.x = 270;
				else if (e.hasClass("skewtoleftshort")) f.x = -270;
				f.data = new Object;
				f.data.oldx = f.x;
				f.data.oldy = f.y;
				f.x = f.x * o;
				f.y = f.y * o;
				f.overwrite = "auto";
				var c = e;
				var c = e;
				if (e.data("splitout") == "chars") c = e.data("mySplitText").chars;
				else if (e.data("splitout") == "words") c = e.data("mySplitText").words;
				else if (e.data("splitout") == "lines") c = e.data("mySplitText").lines;
				var h = e.data("endelementdelay") == t ? 0 : e.data("endelementdelay");
				u.add(a.staggerTo(c, l, f, h), r)
			} else if (e.hasClass("customout")) {
				f = P(f, e.data("customout"));
				var c = e;
				if (e.data("splitout") == "chars") c = e.data("mySplitText").chars;
				else if (e.data("splitout") == "words") c = e.data("mySplitText").words;
				else if (e.data("splitout") == "lines") c = e.data("mySplitText").lines;
				var h = e.data("endelementdelay") == t ? 0 : e.data("endelementdelay");
				f.onStart = function() {
					punchgs.TweenLite.set(e, {
						transformPerspective: f.transformPerspective,
						transformOrigin: f.transformOrigin,
						overwrite: "auto"
					})
				};
				f.data = new Object;
				f.data.oldx = f.x;
				f.data.oldy = f.y;
				f.x = f.x * o;
				f.y = f.y * o;
				u.add(a.staggerTo(c, l, f, h), r)
			} else {
				i.delay = 0;
				u.add(punchgs.TweenLite.to(e, l, i), r)
			}
			u.addLabel(s, r);
			e.data("timeline", u)
		};
		var X = function(t, n) {
			t.children().each(function() {
				try {
					e(this).die("click")
				} catch (t) {}
				try {
					e(this).die("mouseenter")
				} catch (t) {}
				try {
					e(this).die("mouseleave")
				} catch (t) {}
				try {
					e(this).unbind("hover")
				} catch (t) {}
			});
			try {
				t.die("click", "mouseenter", "mouseleave")
			} catch (r) {}
			clearInterval(n.cdint);
			t = null
		};
		var V = function(n, r) {
			r.cd = 0;
			r.loop = 0;
			if (r.stopAfterLoops != t && r.stopAfterLoops > -1) r.looptogo = r.stopAfterLoops;
			else r.looptogo = 9999999;
			if (r.stopAtSlide != t && r.stopAtSlide > -1) r.lastslidetoshow = r.stopAtSlide;
			else r.lastslidetoshow = 999;
			r.stopLoop = "off";
			if (r.looptogo == 0) r.stopLoop = "on";
			if (r.slideamount > 1 && !(r.stopAfterLoops == 0 && r.stopAtSlide == 1)) {
				var i = n.find(".tp-bannertimer");
				n.on("stoptimer", function() {
					i.data("tween").pause();
					if (r.hideTimerBar == "on") i.css({
						visibility: "hidden"
					})
				});
				n.on("starttimer", function() {
					if (r.conthover != 1 && r.videoplaying != true && r.width > r.hideSliderAtLimit && r.bannertimeronpause != true && r.overnav != true)
						if (r.stopLoop == "on" && r.next == r.lastslidetoshow - 1) {} else {
							i.css({
								visibility: "visible"
							});
							i.data("tween").play()
						}
					if (r.hideTimerBar == "on") i.css({
						visibility: "hidden"
					})
				});
				n.on("restarttimer", function() {
					if (r.stopLoop == "on" && r.next == r.lastslidetoshow - 1) {} else {
						i.css({
							visibility: "visible"
						});
						i.data("tween", punchgs.TweenLite.fromTo(i, r.delay / 1e3, {
							width: "0%"
						}, {
							force3D: "auto",
							width: "100%",
							ease: punchgs.Linear.easeNone,
							onComplete: s,
							delay: 1
						}))
					}
					if (r.hideTimerBar == "on") i.css({
						visibility: "hidden"
					})
				});
				n.on("nulltimer", function() {
					i.data("tween").pause(0);
					if (r.hideTimerBar == "on") i.css({
						visibility: "hidden"
					})
				});
				var s = function() {
					if (e("body").find(n).length == 0) {
						X(n, r);
						clearInterval(r.cdint)
					}
					if (n.data("conthover-changed") == 1) {
						r.conthover = n.data("conthover");
						n.data("conthover-changed", 0)
					}
					r.act = r.next;
					r.next = r.next + 1;
					if (r.next > n.find(">ul >li").length - 1) {
						r.next = 0;
						r.looptogo = r.looptogo - 1;
						if (r.looptogo <= 0) {
							r.stopLoop = "on"
						}
					}
					if (r.stopLoop == "on" && r.next == r.lastslidetoshow - 1) {
						n.find(".tp-bannertimer").css({
							visibility: "hidden"
						});
						n.trigger("revolution.slide.onstop")
					} else {
						i.data("tween").restart()
					}
					T(n, r)
				};
				i.data("tween", punchgs.TweenLite.fromTo(i, r.delay / 1e3, {
					width: "0%"
				}, {
					force3D: "auto",
					width: "100%",
					ease: punchgs.Linear.easeNone,
					onComplete: s,
					delay: 1
				}));
				i.data("opt", r);
				n.hover(function() {
					if (r.onHoverStop == "on" && !$()) {
						n.trigger("stoptimer");
						n.trigger("revolution.slide.onpause");
						var i = n.find(">ul >li:eq(" + r.next + ") .slotholder");
						i.find(".defaultimg").each(function() {
							var n = e(this);
							if (n.data("kenburn") != t) {
								n.data("kenburn").pause()
							}
						})
					}
				}, function() {
					if (n.data("conthover") != 1) {
						n.trigger("revolution.slide.onresume");
						n.trigger("starttimer");
						var i = n.find(">ul >li:eq(" + r.next + ") .slotholder");
						i.find(".defaultimg").each(function() {
							var n = e(this);
							if (n.data("kenburn") != t) {
								n.data("kenburn").play()
							}
						})
					}
				})
			}
		};
		var $ = function() {
			var e = ["android", "webos", "iphone", "ipad", "blackberry", "Android", "webos", , "iPod", "iPhone", "iPad", "Blackberry", "BlackBerry"];
			var t = false;
			for (i in e) {
				if (navigator.userAgent.split(e[i]).length > 1) {
					t = true
				}
			}
			return t
		};
		var J = function(e, t, n) {
			var r = t.data("owidth");
			var i = t.data("oheight");
			if (r / i > n.width / n.height) {
				var s = n.container.width() / r;
				var o = i * s;
				var u = o / n.container.height() * e;
				e = e * (100 / u);
				u = 100;
				e = e;
				return e + "% " + u + "%" + " 1"
			} else {
				var s = n.container.width() / r;
				var o = i * s;
				var u = o / n.container.height() * e;
				return e + "% " + u + "%"
			}
		};
		var K = function(n, r, i, s) {
			try {
				var u = n.find(">ul:first-child >li:eq(" + r.act + ")")
			} catch (a) {
				var u = n.find(">ul:first-child >li:eq(1)")
			}
			r.lastslide = r.act;
			var f = n.find(">ul:first-child >li:eq(" + r.next + ")"),
				l = f.find(".slotholder"),
				c = l.data("bgposition"),
				h = l.data("bgpositionend"),
				p = l.data("zoomstart") / 100,
				d = l.data("zoomend") / 100,
				v = l.data("rotationstart"),
				m = l.data("rotationend"),
				g = l.data("bgfit"),
				y = l.data("bgfitend"),
				b = l.data("easeme"),
				w = l.data("duration") / 1e3,
				E = 100;
			if (g == t) g = 100;
			if (y == t) y = 100;
			var S = g,
				x = y;
			g = J(g, l, r);
			y = J(y, l, r);
			E = J(100, l, r);
			if (p == t) p = 1;
			if (d == t) d = 1;
			if (v == t) v = 0;
			if (m == t) m = 0;
			if (p < 1) p = 1;
			if (d < 1) d = 1;
			var T = new Object;
			T.w = parseInt(E.split(" ")[0], 0), T.h = parseInt(E.split(" ")[1], 0);
			var N = false;
			if (E.split(" ")[2] == "1") {
				N = true
			}
			l.find(".defaultimg").each(function() {
				var t = e(this);
				if (l.find(".kenburnimg").length == 0) l.append('<div class="kenburnimg" style="position:absolute;z-index:1;width:100%;height:100%;top:0px;left:0px;"><img src="' + t.attr("src") + '" style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;position:absolute;width:' + T.w + "%;height:" + T.h + '%;"></div>');
				else {
					l.find(".kenburnimg img").css({
						width: T.w + "%",
						height: T.h + "%"
					})
				}
				var n = l.find(".kenburnimg img");
				var i = Q(r, c, g, n, N),
					u = Q(r, h, y, n, N);
				if (N) {
					i.w = S / 100;
					u.w = x / 100
				}
				if (s) {
					punchgs.TweenLite.set(n, {
						autoAlpha: 0,
						transformPerspective: 1200,
						transformOrigin: "0% 0%",
						top: 0,
						left: 0,
						scale: i.w,
						x: i.x,
						y: i.y
					});
					var a = i.w,
						f = a * n.width() - r.width,
						p = a * n.height() - r.height,
						d = Math.abs(i.x / f * 100),
						v = Math.abs(i.y / p * 100);
					if (p == 0) v = 0;
					if (f == 0) d = 0;
					t.data("bgposition", d + "% " + v + "%");
					if (!o(8)) t.data("currotate", G(n));
					if (!o(8)) t.data("curscale", T.w * a + "%  " + (T.h * a + "%"));
					l.find(".kenburnimg").remove()
				} else t.data("kenburn", punchgs.TweenLite.fromTo(n, w, {
					autoAlpha: 1,
					force3D: punchgs.force3d,
					transformOrigin: "0% 0%",
					top: 0,
					left: 0,
					scale: i.w,
					x: i.x,
					y: i.y
				}, {
					autoAlpha: 1,
					rotationZ: m,
					ease: b,
					x: u.x,
					y: u.y,
					scale: u.w,
					onUpdate: function() {
						var e = n[0]._gsTransform.scaleX;
						var i = e * n.width() - r.width,
							s = e * n.height() - r.height,
							u = Math.abs(n[0]._gsTransform.x / i * 100),
							a = Math.abs(n[0]._gsTransform.y / s * 100);
						if (s == 0) a = 0;
						if (i == 0) u = 0;
						t.data("bgposition", u + "% " + a + "%");
						if (!o(8)) t.data("currotate", G(n));
						if (!o(8)) t.data("curscale", T.w * e + "%  " + (T.h * e + "%"))
					}
				}))
			})
		};
		var Q = function(e, t, n, r, i) {
			var s = new Object;
			if (!i) s.w = parseInt(n.split(" ")[0], 0) / 100;
			else s.w = parseInt(n.split(" ")[1], 0) / 100;
			switch (t) {
				case "left top":
				case "top left":
					s.x = 0;
					s.y = 0;
					break;
				case "center top":
				case "top center":
					s.x = ((0 - r.width()) * s.w + parseInt(e.width, 0)) / 2;
					s.y = 0;
					break;
				case "top right":
				case "right top":
					s.x = (0 - r.width()) * s.w + parseInt(e.width, 0);
					s.y = 0;
					break;
				case "center left":
				case "left center":
					s.x = 0;
					s.y = ((0 - r.height()) * s.w + parseInt(e.height, 0)) / 2;
					break;
				case "center center":
					s.x = ((0 - r.width()) * s.w + parseInt(e.width, 0)) / 2;
					s.y = ((0 - r.height()) * s.w + parseInt(e.height, 0)) / 2;
					break;
				case "center right":
				case "right center":
					s.x = (0 - r.width()) * s.w + parseInt(e.width, 0);
					s.y = ((0 - r.height()) * s.w + parseInt(e.height, 0)) / 2;
					break;
				case "bottom left":
				case "left bottom":
					s.x = 0;
					s.y = (0 - r.height()) * s.w + parseInt(e.height, 0);
					break;
				case "bottom center":
				case "center bottom":
					s.x = ((0 - r.width()) * s.w + parseInt(e.width, 0)) / 2;
					s.y = (0 - r.height()) * s.w + parseInt(e.height, 0);
					break;
				case "bottom right":
				case "right bottom":
					s.x = (0 - r.width()) * s.w + parseInt(e.width, 0);
					s.y = (0 - r.height()) * s.w + parseInt(e.height, 0);
					break
			}
			return s
		};
		var G = function(e) {
			var t = e.css("-webkit-transform") || e.css("-moz-transform") || e.css("-ms-transform") || e.css("-o-transform") || e.css("transform");
			if (t !== "none") {
				var n = t.split("(")[1].split(")")[0].split(",");
				var r = n[0];
				var i = n[1];
				var s = Math.round(Math.atan2(i, r) * (180 / Math.PI))
			} else {
				var s = 0
			}
			return s < 0 ? s += 360 : s
		};
		var Y = function(n, r) {
			try {
				var i = n.find(">ul:first-child >li:eq(" + r.act + ")")
			} catch (s) {
				var i = n.find(">ul:first-child >li:eq(1)")
			}
			r.lastslide = r.act;
			var o = n.find(">ul:first-child >li:eq(" + r.next + ")");
			var u = i.find(".slotholder");
			var a = o.find(".slotholder");
			n.find(".defaultimg").each(function() {
				var n = e(this);
				punchgs.TweenLite.killTweensOf(n, false);
				punchgs.TweenLite.set(n, {
					scale: 1,
					rotationZ: 0
				});
				punchgs.TweenLite.killTweensOf(n.data("kenburn img"), false);
				if (n.data("kenburn") != t) {
					n.data("kenburn").pause()
				}
				if (n.data("currotate") != t && n.data("bgposition") != t && n.data("curscale") != t) punchgs.TweenLite.set(n, {
					rotation: n.data("currotate"),
					backgroundPosition: n.data("bgposition"),
					backgroundSize: n.data("curscale")
				});
				if (n != t && n.data("kenburn img") != t && n.data("kenburn img").length > 0) punchgs.TweenLite.set(n.data("kenburn img"), {
					autoAlpha: 0
				})
			})
		};
		var Z = function(t, n) {
			if ($() && n.parallaxDisableOnMobile == "on") return false;
			t.find(">ul:first-child >li").each(function() {
				var t = e(this);
				for (var r = 1; r <= 10; r++) t.find(".rs-parallaxlevel-" + r).each(function() {
					var t = e(this);
					t.wrap('<div style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index:' + t.css("zIndex") + '" class="tp-parallax-container" data-parallaxlevel="' + n.parallaxLevels[r - 1] + '"></div>')
				})
			});
			if (n.parallax == "mouse" || n.parallax == "scroll+mouse" || n.parallax == "mouse+scroll") {
				t.mouseenter(function(e) {
					var n = t.find(".current-sr-slide-visible");
					var r = t.offset().top,
						i = t.offset().left,
						s = e.pageX - i,
						o = e.pageY - r;
					n.data("enterx", s);
					n.data("entery", o)
				});
				t.on("mousemove.hoverdir, mouseleave.hoverdir", function(n) {
					var r = t.find(".current-sr-slide-visible");
					switch (n.type) {
						case "mousemove":
							var i = t.offset().top,
								s = t.offset().left,
								o = r.data("enterx"),
								u = r.data("entery"),
								a = o - (n.pageX - s),
								f = u - (n.pageY - i);
							r.find(".tp-parallax-container").each(function() {
								var t = e(this),
									n = parseInt(t.data("parallaxlevel"), 0) / 100,
									r = a * n,
									i = f * n;
								punchgs.TweenLite.to(t, .4, {
									force3D: "auto",
									x: r,
									y: i,
									ease: punchgs.Power3.easeOut,
									overwrite: "all"
								})
							});
							break;
						case "mouseleave":
							r.find(".tp-parallax-container").each(function() {
								var t = e(this);
								punchgs.TweenLite.to(t, 1.5, {
									force3D: "auto",
									x: 0,
									y: 0,
									ease: punchgs.Power3.easeOut
								})
							});
							break
					}
				});
				if ($()) window.ondeviceorientation = function(n) {
					var r = Math.round(n.beta || 0),
						i = Math.round(n.gamma || 0);
					var s = t.find(".current-sr-slide-visible");
					if (e(window).width() > e(window).height()) {
						var o = i;
						i = r;
						r = o
					}
					var u = 360 / t.width() * i,
						a = 180 / t.height() * r;
					s.find(".tp-parallax-container").each(function() {
						var t = e(this),
							n = parseInt(t.data("parallaxlevel"), 0) / 100,
							r = u * n,
							i = a * n;
						punchgs.TweenLite.to(t, .2, {
							force3D: "auto",
							x: r,
							y: i,
							ease: punchgs.Power3.easeOut
						})
					})
				}
			}
			if (n.parallax == "scroll" || n.parallax == "scroll+mouse" || n.parallax == "mouse+scroll") {
				e(window).on("scroll", function(e) {
					et(t, n)
				})
			}
		};
		var et = function(t, n) {
			if ($() && n.parallaxDisableOnMobile == "on") return false;
			var r = t.offset().top,
				i = e(window).scrollTop(),
				s = r + t.height() / 2,
				o = r + t.height() / 2 - i,
				u = e(window).height() / 2,
				a = u - o;
			if (s < u) a = a - (u - s);
			var f = t.find(".current-sr-slide-visible");
			t.find(".tp-parallax-container").each(function(t) {
				var n = e(this),
					r = parseInt(n.data("parallaxlevel"), 0) / 100,
					i = a * r;
				n.data("parallaxoffset", i);
				punchgs.TweenLite.to(n, .2, {
					force3D: "auto",
					y: i,
					ease: punchgs.Power3.easeOut
				})
			});
			if (n.parallaxBgFreeze != "on") {
				var l = n.parallaxLevels[0] / 100,
					c = a * l;
				punchgs.TweenLite.to(t, .2, {
					force3D: "auto",
					y: c,
					ease: punchgs.Power3.easeOut
				})
			}
		};
		var tt = function(n, r) {
			var i = n.parent();
			if (r.navigationType == "thumb" || r.navsecond == "both") {
				i.append('<div class="tp-bullets tp-thumbs ' + r.navigationStyle + '"><div class="tp-mask"><div class="tp-thumbcontainer"></div></div></div>')
			}
			var s = i.find(".tp-bullets.tp-thumbs .tp-mask .tp-thumbcontainer");
			var o = s.parent();
			o.width(r.thumbWidth * r.thumbAmount);
			o.height(r.thumbHeight);
			o.parent().width(r.thumbWidth * r.thumbAmount);
			o.parent().height(r.thumbHeight);
			n.find(">ul:first >li").each(function(e) {
				var i = n.find(">ul:first >li:eq(" + e + ")");
				var o = i.find(".defaultimg").css("backgroundColor");
				if (i.data("thumb") != t) var u = i.data("thumb");
				else var u = i.find("img:first").attr("src");
				s.append('<div class="bullet thumb" style="background-color:' + o + ";position:relative;width:" + r.thumbWidth + "px;height:" + r.thumbHeight + "px;background-image:url(" + u + ') !important;background-size:cover;background-position:center center;"></div>');
				var a = s.find(".bullet:first")
			});
			var a = 10;
			s.find(".bullet").each(function(t) {
				var i = e(this);
				if (t == r.slideamount - 1) i.addClass("last");
				if (t == 0) i.addClass("first");
				i.width(r.thumbWidth);
				i.height(r.thumbHeight);
				if (a < i.outerWidth(true)) a = i.outerWidth(true);
				i.click(function() {
					if (r.transition == 0 && i.index() != r.act) {
						r.next = i.index();
						u(r, n)
					}
				})
			});
			var f = a * n.find(">ul:first >li").length;
			var l = s.parent().width();
			r.thumbWidth = a;
			if (l < f) {
				e(document).mousemove(function(t) {
					e("body").data("mousex", t.pageX)
				});
				s.parent().mouseenter(function() {
					var t = e(this);
					t.addClass("over");
					var r = t.offset();
					var i = e("body").data("mousex") - r.left;
					var s = t.width();
					var o = t.find(".bullet:first").outerWidth(true);
					var u = o * n.find(">ul:first >li").length;
					var a = u - s + 15;
					var f = a / s;
					i = i - 30;
					var l = 0 - i * f;
					if (l > 0) l = 0;
					if (l < 0 - u + s) l = 0 - u + s;
					rt(t, l, 200)
				});
				s.parent().mousemove(function() {
					var t = e(this);
					var r = t.offset();
					var i = e("body").data("mousex") - r.left;
					var s = t.width();
					var o = t.find(".bullet:first").outerWidth(true);
					var u = o * n.find(">ul:first >li").length - 1;
					var a = u - s + 15;
					var f = a / s;
					i = i - 3;
					if (i < 6) i = 0;
					if (i + 3 > s - 6) i = s;
					var l = 0 - i * f;
					if (l > 0) l = 0;
					if (l < 0 - u + s) l = 0 - u + s;
					rt(t, l, 0)
				});
				s.parent().mouseleave(function() {
					var t = e(this);
					t.removeClass("over");
					nt(n)
				})
			}
		};
		var nt = function(e) {
			var t = e.parent().find(".tp-bullets.tp-thumbs .tp-mask .tp-thumbcontainer");
			var n = t.parent();
			var r = n.offset();
			var i = n.find(".bullet:first").outerWidth(true);
			var s = n.find(".bullet.selected").index() * i;
			var o = n.width();
			var i = n.find(".bullet:first").outerWidth(true);
			var u = i * e.find(">ul:first >li").length;
			var a = u - o;
			var f = a / o;
			var l = 0 - s;
			if (l > 0) l = 0;
			if (l < 0 - u + o) l = 0 - u + o;
			if (!n.hasClass("over")) {
				rt(n, l, 200)
			}
		};
		var rt = function(e, t, n) {
			punchgs.TweenLite.to(e.find(".tp-thumbcontainer"), .2, {
				force3D: "auto",
				left: t,
				ease: punchgs.Power3.easeOut,
				overwrite: "auto"
			})
		}
	})(jQuery)
</script>
</html>
