var a=Object.defineProperty;var s=Object.getOwnPropertySymbols;var i=Object.prototype.hasOwnProperty,p=Object.prototype.propertyIsEnumerable;var l=(o,t,e)=>t in o?a(o,t,{enumerable:!0,configurable:!0,writable:!0,value:e}):o[t]=e,n=(o,t)=>{for(var e in t||(t={}))i.call(t,e)&&l(o,e,t[e]);if(s)for(var e of s(t))p.call(t,e)&&l(o,e,t[e]);return o};import{d as u}from"./index.aff2f9f0.js";import{B as d}from"./Textarea.d161fc2e.js";import{C as k}from"./Index.05d0e847.js";import{C as b}from"./Card.86b7d3cc.js";import{C as m}from"./SettingsRow.eb71f07b.js";import{n as f}from"./vueComponentNormalizer.87056a83.js";import"./index.4ee805df.js";import"./client.93f15631.js";import"./Tooltip.674a9fb4.js";import"./QuestionMark.83ebd18e.js";import"./Slide.f5d21606.js";import"./Row.13b6f3f1.js";var B=function(){var o=this,t=o.$createElement,e=o._self._c||t;return e("div",{staticClass:"aioseo-tools-bad-bot-blocker"},[e("core-card",{attrs:{slug:"badBotBlocker","header-text":o.strings.badBotBlocker}},[e("core-settings-row",{attrs:{name:o.strings.blockBadBotsHttp},scopedSlots:o._u([{key:"content",fn:function(){return[e("base-toggle",{model:{value:o.options.deprecated.tools.blocker.blockBots,callback:function(r){o.$set(o.options.deprecated.tools.blocker,"blockBots",r)},expression:"options.deprecated.tools.blocker.blockBots"}})]},proxy:!0}])}),e("core-settings-row",{attrs:{name:o.strings.blockReferralSpamHttp},scopedSlots:o._u([{key:"content",fn:function(){return[e("base-toggle",{model:{value:o.options.deprecated.tools.blocker.blockReferer,callback:function(r){o.$set(o.options.deprecated.tools.blocker,"blockReferer",r)},expression:"options.deprecated.tools.blocker.blockReferer"}})]},proxy:!0}])}),o.options.deprecated.tools.blocker.blockBots||o.options.deprecated.tools.blocker.blockReferer?e("core-settings-row",{attrs:{name:o.strings.useCustomBlocklists},scopedSlots:o._u([{key:"content",fn:function(){return[e("base-toggle",{model:{value:o.options.deprecated.tools.blocker.custom.enable,callback:function(r){o.$set(o.options.deprecated.tools.blocker.custom,"enable",r)},expression:"options.deprecated.tools.blocker.custom.enable"}})]},proxy:!0}],null,!1,2813344989)}):o._e(),o.options.deprecated.tools.blocker.blockBots&&o.options.deprecated.tools.blocker.custom.enable?e("core-settings-row",{attrs:{name:o.strings.userAgentBlocklist},scopedSlots:o._u([{key:"content",fn:function(){return[e("base-textarea",{attrs:{minHeight:200,maxHeight:200},model:{value:o.options.deprecated.tools.blocker.custom.bots,callback:function(r){o.$set(o.options.deprecated.tools.blocker.custom,"bots",r)},expression:"options.deprecated.tools.blocker.custom.bots"}})]},proxy:!0}],null,!1,2333962956)}):o._e(),o.options.deprecated.tools.blocker.blockReferer&&o.options.deprecated.tools.blocker.custom.enable?e("core-settings-row",{attrs:{name:o.strings.refererBlockList},scopedSlots:o._u([{key:"content",fn:function(){return[e("base-textarea",{attrs:{minHeight:200,maxHeight:200},model:{value:o.options.deprecated.tools.blocker.custom.referer,callback:function(r){o.$set(o.options.deprecated.tools.blocker.custom,"referer",r)},expression:"options.deprecated.tools.blocker.custom.referer"}})]},proxy:!0}],null,!1,3362070519)}):o._e(),o.options.deprecated.tools.blocker.blockBots||o.options.deprecated.tools.blocker.blockReferer?e("core-settings-row",{attrs:{name:o.strings.trackBlockedBots},scopedSlots:o._u([{key:"content",fn:function(){return[e("base-toggle",{model:{value:o.options.deprecated.tools.blocker.track,callback:function(r){o.$set(o.options.deprecated.tools.blocker,"track",r)},expression:"options.deprecated.tools.blocker.track"}}),e("core-alert",{attrs:{type:"blue"},domProps:{innerHTML:o._s(o.strings.logLocation)}})]},proxy:!0}],null,!1,3972286096)}):o._e()],1)],1)},_=[];const g={components:{BaseTextarea:d,CoreAlert:k,CoreCard:b,CoreSettingsRow:m},data(){return{strings:{badBotBlocker:"Bad Bot Blocker",blockBadBotsHttp:"Block Bad Bots using HTTP",blockReferralSpamHttp:"Block Referral Spam using HTTP",trackBlockedBots:"Track Blocked Bots",useCustomBlocklists:"Use Custom Blocklists",userAgentBlocklist:"User Agent Blocklist",refererBlockList:"Referer Blocklist",blockedBotsLog:"Blocked Bots Log",logLocation:this.$t.sprintf("The log for the blocked bots is located here: %1$s",'<br><a href="'+this.$aioseo.urls.blockedBotsLogUrl+'" target="_blank">'+this.$aioseo.urls.blockedBotsLogUrl+"</a>")}}},computed:n({},u(["options"]))},c={};var x=f(g,B,_,!1,y,null,null,null);function y(o){for(let t in c)this[t]=c[t]}var M=function(){return x.exports}();export{M as default};
