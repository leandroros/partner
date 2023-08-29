function displaylightbox(url, options)
{
   options.items = { src: url };
   options.type = 'iframe';
   $.magnificPopup.open(options);
}
(function(d,e){var h=function(b,a){return-1===(""+(this.getAttribute("data-filtertext")||d(this).text())).toLowerCase().indexOf(a)};d.widget("wb.filterable",{options:{filterReveal:!1,filterCallback:h,enhanced:!1,input:null,children:"> li, > option, > optgroup option, > tbody tr"},_create:function(){var b=this.options;d.extend(this,{_search:null,_timer:0});this._setInput(b.input);b.enhanced||this._filterItems((this._search&&this._search.val()||"").toLowerCase())},_onKeyUp:function(){var b,a,c=this._search;
c&&(b=c.val().toLowerCase(),a=c[0].getAttribute("data-lastval")+"",a&&a===b||(this._timer&&(window.clearTimeout(this._timer),this._timer=0),this._timer=this._delay(function(){if(!1===this._trigger("beforefilter",null,{input:c}))return!1;c[0].setAttribute("data-lastval",b);this._filterItems(b);this._timer=0},250)))},_getFilterableItems:function(){var b=this.element,a=this.options.children,a=a?d.isFunction(a)?a():a.nodeName?d(a):a.jquery?a:this.element.find(a):{length:0};0===a.length&&(a=b.children());
return a},_filterItems:function(b){var a,c,e,k,l=[],g=[],m=this.options,f=this._getFilterableItems();if(null!=b)for(c=m.filterCallback||h,e=f.length,a=0;a<e;a++)k=c.call(f[a],a,b)?g:l,k.push(f[a]);if(0===g.length)f[m.filterReveal&&0===b.length?"addClass":"removeClass"]("ui-screen-hidden");else d(g).addClass("ui-screen-hidden"),d(l).removeClass("ui-screen-hidden");this._refreshChildWidget();this._trigger("filter",null,{items:f})},_refreshChildWidget:function(){var b,a,c=["collapsibleset","selectmenu",
"controlgroup","listview"];for(a=c.length-1;-1<a;a--)b=c[a],(b=this.element.data("ui-"+b))&&d.isFunction(b.refresh)&&b.refresh()},_setInput:function(b){var a=this._search;this._timer&&(window.clearTimeout(this._timer),this._timer=0);a&&(this._off(a,"keyup keydown keypress change input"),a=null);b&&(a=b.jquery?b:b.nodeName?d(b):this.document.find(b),this._on(a,{keydown:"_onKeyDown",keypress:"_onKeyPress",keyup:"_onKeyUp",change:"_onKeyUp",input:"_onKeyUp"}));this._search=a},_onKeyDown:function(b){this._preventKeyPress=
!1;b.keyCode===d.ui.keyCode.ENTER&&(b.preventDefault(),this._preventKeyPress=!0)},_onKeyPress:function(b){this._preventKeyPress&&(b.preventDefault(),this._preventKeyPress=!1)},_setOptions:function(b){var a=!(b.filterReveal===e&&b.filterCallback===e&&b.children===e);this._super(b);b.input!==e&&(this._setInput(b.input),a=!0);a&&this.refresh()},_destroy:function(){var b=this.options,a=this._getFilterableItems();b.enhanced?a.toggleClass("ui-screen-hidden",b.filterReveal):a.removeClass("ui-screen-hidden")},
refresh:function(){this._timer&&(window.clearTimeout(this._timer),this._timer=0);this._filterItems((this._search&&this._search.val()||"").toLowerCase())}})})(jQuery);

$(document).ready(function()
{
   $("#FlexGrid1-grid").filterable( {input:'#find-input', children:'> div', filterReveal:false });
});
