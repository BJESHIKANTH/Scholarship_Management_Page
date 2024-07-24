"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[74717],{41205:function(e,t,n){n.d(t,{_:function(){return i}});var s=n(70865),a=n(52322),o=(0,n(6620).Z)((0,a.jsx)("path",{d:"M9.867 12.133L8 14l8 8 8-8-1.867-1.867L16 18.266l-6.133-6.133z"}),"ChevronDown.svg"),i=function(e){return(0,a.jsx)(o,(0,s.Z)({viewBox:"0 0 32 32"},e))}},6713:function(e,t,n){n.d(t,{K:function(){return i}});var s=n(70865),a=n(52322),o=(0,n(6620).Z)((0,a.jsx)("path",{d:"M22.133 21.2L24 19.333l-8-8-8 8L9.867 21.2 16 15.067l6.133 6.133z"}),"ChevronUp.svg"),i=function(e){return(0,a.jsx)(o,(0,s.Z)({viewBox:"0 0 32 32"},e))}},33201:function(e,t,n){n.d(t,{bV:function(){return y}});var s=n(47842),a=n(70865),o=n(26297),i=n(87394),r=n(52322),l=n(67550),c=n(21647),d=n(74601),u=n(80422),p=n(41075),m=n(48289),h=n(39514),x=n(85966),f=n(12281),v=n(9867),b=n(6713),j=n(2784),C=n(8740),g=n(18624),S=(0,f.g)(l.Z),P="left",w=(0,C.ZL)()(function(){return{root:{display:"flex",flexDirection:"column",paddingRight:v.W0.l,width:"100%"}}}),I=function(e){var t=e.ItemComponent,n=(0,o.Z)(e,["ItemComponent"]),s=w().classes;return(0,r.jsx)("div",{className:s.root,children:(0,r.jsx)(t,(0,a.Z)({},n))})},Z=(0,C.ZL)()(function(e,t){var n=e.palette,s=e.tokens.font,a=t.isDisabled;return{title:{marginTop:0},popoverPaper:{border:"".concat(v.Cg.width.default," solid ").concat(n.border1Color),boxShadow:"0 ".concat(v.W0.xxs," ").concat(v.W0.xxs,"  0 ").concat(n.border1Color)},selectedItemContainer:{border:"".concat(v.Cg.width.default," solid ").concat(n.border1Color),borderRadius:v.Cg.radius.m,cursor:a?"initial":"pointer",display:"flex",justifyContent:"space-between",padding:v.W0.base,position:"relative",width:"100%"},radioSelectedItemContainer:{paddingLeft:v.W0.s},chevron:{position:"absolute",cursor:"pointer",right:v.W0.base,top:v.W0.base,fontSize:s.size.l,fill:a?n.border1Color:n.primary.main},listRoot:{cursor:"pointer"},listItem:{"&:hover":{backgroundColor:n.action.selected}},footer:{padding:"0 ".concat(v.W0.base," ").concat(v.W0.base," ").concat(v.W0.base)},disabledListItem:{cursor:"auto"},skeleton:{transform:"scale(1)"}}}),y=function(e){var t=e.analyticsLabels,n=e.classesProps,o=e.drawerStatusMessageProps,l=e.ExpandableSelectItemAction,f=e.expandableSelectItemActionProps,C=e.ExtraContentComponent,g=e.extraContentProps,w=e.FooterComponent,y=e.isDisabled,L=e.isLoadingData,N=e.ItemComponent,k=e.itemProps,_=e.items,z=e.onValueChange,T=e.selectedItem,D=e.title,F=e.hidePopover,A=Z({isDisabled:y}),M=A.classes,E=A.cx,O=(0,i.Z)((0,j.useState)(null),2),B=O[0],G=O[1],H=(0,j.useCallback)(function(e){y||G(e.currentTarget)},[y]),W=(0,j.useCallback)(function(){G(null)},[]),V=(0,j.useCallback)(function(e){z(_[e]),G(null)},[_,z]),R=(0,j.useMemo)(function(){return B&&"".concat(B.offsetWidth,"px - 2 * ").concat(v.W0.base," - 2 * ").concat(v.Cg.width.default," - ").concat(v.W0.l)||""},[B]);return(0,r.jsxs)(r.Fragment,{children:[D&&(0,r.jsx)("h5",{className:M.title,children:L?(0,r.jsx)(c.Z,{className:M.skeleton,width:100}):D}),L?(0,r.jsx)(c.Z,{className:M.skeleton,height:54,width:"100%"}):(0,r.jsxs)(r.Fragment,{children:[o&&(0,r.jsx)(h.l,(0,a.Z)({},o)),(0,r.jsxs)(S,{className:E(M.selectedItemContainer,n.selectedItemContainer,(0,s.Z)({},M.radioSelectedItemContainer,null==k?void 0:k.showRadioButtons)),display:"flex",justifyContent:"space-between",onClick:H,"aria-label":D,labelTrack:t.dropdownExpand,children:[(0,r.jsx)(I,(0,a.Z)({isDisabled:null==T?void 0:T.isDisabled,ItemComponent:N,item:T,selectedItem:T,isMainItem:!0},k)),!F&&(0,r.jsx)(l,(0,a.Z)({classesProps:{chevron:M.chevron}},f))]})]}),!F&&(0,r.jsxs)(d.ZP,{open:Boolean(B),anchorEl:B,onClose:W,anchorOrigin:{vertical:"top",horizontal:P},transitionDuration:0,transformOrigin:{vertical:"top",horizontal:P},classes:{paper:M.popoverPaper},children:[(0,r.jsxs)(u.Z,{classes:{root:M.listRoot},children:[_.map(function(e,s){return(0,r.jsx)(x.H,{"data-automation":"dropdownListItem-".concat(s),onClick:function(){e.isDisabled||V(s)},classes:{root:E(e.isDisabled?M.disabledListItem:M.listItem,n.listItem)},labelTrack:t.dropdownItemSelect,children:(0,r.jsx)(I,(0,a.Z)({isDisabled:e.isDisabled,item:e,ItemComponent:N,selectedItem:T,width:R},k))},e.name||e.id)}),C&&(0,r.jsx)(C,(0,a.Z)({classesProps:{root:E(M.listItem,n.listItem)},width:R},g))]}),w&&(0,r.jsx)(p.ZP,{container:!0,justifyContent:"center",className:M.footer,children:(0,r.jsxs)(p.ZP,{item:!0,xs:12,children:[(0,r.jsx)(m.Z,{}),(0,r.jsx)(w,{})]})}),(0,r.jsx)(b.K,{className:M.chevron,onClick:W})]})]})};y.defaultProps={analyticsLabels:{},classesProps:{},drawerStatusMessageProps:null,ExpandableSelectItemAction:g.Y,expandableSelectItemActionProps:{},ExtraContentComponent:null,extraContentProps:{},FooterComponent:null,isDisabled:!1,isLoadingData:!1,itemProps:{},items:[],onValueChange:function(){},selectedItem:{},title:"",hidePopover:!1}},18624:function(e,t,n){n.d(t,{Y:function(){return o}});var s=n(52322),a=n(41205),o=function(e){var t=e.classesProps;return e.isShown?(0,s.jsx)(a._,{className:t.chevron}):null};o.defaultProps={classesProps:{},isShown:!0}},30902:function(e,t,n){n.d(t,{O:function(){return a}});var s=n(78287),a=(0,n(12281).g)(s.Z)},12581:function(e,t,n){n.d(t,{v:function(){return l}});var s=n(52322),a=n(21647),o=n(47999),i=n(36888),r=(0,n(8740).ZL)()(function(){return{actionLink:{width:"100%",display:"flex",justifyContent:"center"}}}),l=function(e){var t=e.analyticsLabel,n=e.onClick,l=e.label,c=e.ready,d=e.classesProps,u=r(),p=u.classes,m=u.cx,h=(0,i.bo)().classes;return(0,s.jsx)("div",{className:m(d.actionLink,p.actionLink),children:(0,s.jsx)(o.z,{className:h.buttonAnchor,color:"inherit",onClick:n,"aria-label":l,labelTrack:t,"data-automation":"ActionLink",children:(0,s.jsx)("span",{className:d.label,children:c?l:(0,s.jsx)(a.Z,{variant:"text",width:100})})})})};l.defaultProps={analyticsLabel:"",classesProps:{}}},10241:function(e,t,n){n.d(t,{j:function(){return i}});var s=n(52322),a=n(33201),o=n(18624),i=function(e){var t=e.analyticsLabels,n=e.ExpandableSelectItemAction,o=e.ExtraContentComponent,i=e.FooterComponent,r=e.ItemComponent,l=e.expandableSelectItemActionProps,c=e.extraContentProps,d=e.isDisabled,u=e.itemProps,p=e.onValueChange,m=e.selectedSize,h=e.sizes,x=e.title;return(0,s.jsx)(s.Fragment,{children:!!h.length&&(0,s.jsx)(a.bV,{analyticsLabels:t,ExtraContentComponent:o,ExpandableSelectItemAction:n,FooterComponent:i,ItemComponent:r,extraContentProps:c,expandableSelectItemActionProps:l,isDisabled:d,itemProps:u,items:h,onValueChange:p,selectedItem:m,title:x})})};i.defaultProps={analyticsLabels:{},ExpandableSelectItemAction:o.Y,ExtraContentComponent:null,FooterComponent:null,expandableSelectItemActionProps:{},extraContentProps:{},isDisabled:!1,itemProps:{},onValueChange:function(){},sizes:[],title:""}},62495:function(e,t,n){n.d(t,{s:function(){return Y}});var s=n(52322),a=n(12581),o=n(10241),i=n(15873),r=n(62197),l=n(68052),c=n(12410),d=n(9390),u=n(41687),p=n(17604),m=n(94909),h=n(96866),x=n(59877),f=n(8740),v=(0,f.ZL)()(function(e){var t=e.tokens,n=t.color,s=t.font;return{iconWrapper:{display:"flex",paddingLeft:t.spacing.s,alignItems:"center"},openInNewIcon:{fontSize:s.size.l,fill:n.gray.slate}}}),b=function(e){var t=e.t;return{custom:t("common:image_size_custom"),customInfo:t("customize_size")}},j=function(e){var t=e.assetId,n=e.classesProps,a=e.width,o=(0,c.Q)({width:a}).classes,f=v().classes,j=b({t:(0,x.$G)(l.AH).t}),C=(0,m.d)(),g=(0,u.n)().isMobileServer,S=(0,p.t)({asset:{id:t},isTemplateAsset:!1,labels:j}).editorButtonHref;return C||g?null:(0,s.jsx)(i.ZP,{classes:{root:n.root},children:(0,s.jsxs)(d.r,{href:S,target:"_blank",rel:"nofollow","data-automation":"CustomLinkSizeSelectItem_ListItem_customLink",children:[(0,s.jsxs)(r.Z,{variant:"body2",className:o.row,children:[(0,s.jsx)("span",{className:o.bold,children:j.custom}),(0,s.jsx)("span",{className:f.iconWrapper,children:(0,s.jsx)(h._,{className:f.openInNewIcon})})]}),(0,s.jsx)(r.Z,{variant:"body2",className:o.row,children:(0,s.jsx)("span",{children:j.customInfo})})]})})};j.defaultProps={classesProps:{},width:""};var C=n(61640),g=n(21647),S=n(67550),P=n(28903),w=n(94380),I=n(54112),Z=n(41205),y=function(e){var t=e.showShadowsSelect,n=e.value,a=e.onChangeHandler,o=(0,c.Q)().classes,i=(0,I.D)({namespace:[l.AH],translationKeys:{shadows:"shadows",shadowsOn:"common:filters_on",shadowsOff:"common:filters_off"}}).labels;return(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)("span",{children:i.shadows}),t&&(0,s.jsxs)(P.Z,{className:o.input,classes:{select:o.inputSelect},variant:"standard",value:n,onChange:function(e){return a(e.target.value)},IconComponent:Z._,children:[(0,s.jsx)(w.Z,{value:"on",children:i.shadowsOn.toLowerCase()}),(0,s.jsx)(w.Z,{value:"off",children:i.shadowsOff.toLowerCase()})]})]})};y.defaultProps={showShadowsSelect:!1};var L=n(97258),N=n(8149),k=n(18411),_=n(68769),z=n(81232),T=function(e){var t,n=e.t,s=e.name,a=e.displayName,o=null===(t=k.nd[(0,z.z)(s)])||void 0===t?void 0:t.label;return{formats:n("formats").toLowerCase(),pixels:n("pixels"),dpi:n("dpi"),vectorInfo:n("no_resolution_loss"),rotatedAngle:n("rotated_angle",{ns:l.AH}),translatedName:o?n(o):a}},D=function(e){var t=e.classes,n=e.checked,a=e.labels;return(0,s.jsx)("div",{className:t.radioButtonContainer,"data-automation":"divRadioButton-".concat(a.productName),children:(0,s.jsx)(C.Z,{checked:n,classes:{checked:t.selectedRadioButton,root:t.radioButton},inputProps:{"aria-label":a.productName}})})},F=function(e){var t=e.ready,n=e.pixels,a=e.showRadioButtons,o=e.classes,i=e.heading;return(0,s.jsx)(r.Z,{variant:"body2",className:o.row,children:t?(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)("span",{className:o.bold,children:i}),n&&!a&&(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)("span",{className:o.separator,children:"\xb7"}),(0,s.jsx)("span",{children:n})]})]}):(0,s.jsx)(g.Z,{variant:"text",width:"100%"})})},A=function(e){var t=e.item,n=e.width,a=e.showRadioButtons,o=e.selectedSize,i=e.is3dObject,d=e.selectedShadowsOption,u=e.setSelectedShadowsOption,p=t.displayName,m=t.format,h=t.dpi,f=t.name,v=(0,x.$G)([l.SiC,l.sm6,l.AH]),b=v.t,j=v.ready,C=(0,c.Q)({width:n}).classes,P=T({t:b,name:f,displayName:p}),w=(0,_.It)({isImageAsset:!0,assetSize:t,labels:P}),I=w.formattedDimensions,Z=w.pixels,k=f===N.gf;return(0,s.jsxs)(S.Z,{display:"flex",flexDirection:"row",children:[a&&j&&(0,s.jsx)(D,{checked:t.name===o.name,classes:C,labels:P}),(0,s.jsxs)(S.Z,{children:[(0,s.jsx)(F,{heading:P.translatedName,classes:C,pixels:Z,ready:j,showRadioButtons:a}),(0,s.jsx)(r.Z,{variant:"body2",className:C.row,children:j?(0,s.jsxs)(S.Z,{component:"span",children:[k&&P.vectorInfo,i&&(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)("span",{children:P.rotatedAngle}),(0,s.jsx)("span",{className:C.separator,children:"\xb7"})]}),I&&(0,s.jsx)("span",{children:I}),i&&(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)("span",{className:C.separator,children:"\xb7"}),(0,s.jsx)("span",{children:P.shadows}),(0,s.jsx)(y,{value:d,onChangeHandler:u,showShadowsSelect:(0,z.z)(t.name)===L.JJ})]}),h&&!i&&(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)("span",{className:C.separator,children:"\xb7"}),(0,s.jsx)("span",{children:"".concat(h," ").concat(P.dpi)})]}),m&&!k&&!i&&(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)("span",{className:C.separator,children:"\xb7"}),(0,s.jsx)("span",{children:m.toUpperCase()})]})]}):(0,s.jsx)(g.Z,{variant:"text",width:"100%"})})]})]})};A.defaultProps={item:{},width:"",is3dObject:!1};var M=n(25237),E=n.n(M)()(function(){return n.e(67286).then(n.bind(n,67286)).then(function(e){return e.SizeGuideModal})},{loadableGenerated:{webpack:function(){return[67286]}},ssr:!1}),O=n(52417),B=n(44297),G=n(37082),H=n(87394),W=n(2784),V=function(){var e=(0,H.Z)((0,W.useState)(!1),2),t=e[0],n=e[1];return{isSizeGuideModalOpen:t,sizeGuideModalDisplayHandler:function(){return n(!t)}}},R=(0,f.ZL)()(function(e){return{actionLink:{justifyContent:"flex-start",marginTop:e.tokens.spacing.s,height:"100%"}}}),K={dropdownExpand:"imageSizeInteraction",dropdownItemSelect:"imageSizeSelected"},Y=function(e){var t=e.asset,n=e.formattedImageSizes,i=e.selectedImageSize,r=e.setSelectedImageSize,l=e.selectedShadowsOption,c=e.setSelectedShadowsOption,d=V(),u=d.isSizeGuideModalOpen,p=d.sizeGuideModalDisplayHandler,m=(0,G.T)(),h=m.labels,x=m.ready,f=R().classes,v=(0,B.f8)(t);return(0,s.jsx)(s.Fragment,{children:v?(0,s.jsx)(O.H,{title:h.assetSizeFormat,values:n,onValueChange:r,ItemComponent:A,itemProps:{showRadioButtons:!0,selectedSize:i,selectedShadowsOption:l,setSelectedShadowsOption:c,is3dObject:v}}):(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)(o.j,{analyticsLabels:K,ExtraContentComponent:j,FooterComponent:function(){return(0,s.jsx)(a.v,{ready:x,label:h.sizeGuide,onClick:p,classesProps:f})},ItemComponent:A,extraContentProps:{assetId:t.id},itemProps:{labels:h},selectedSize:i,onValueChange:r,sizes:n,title:h.assetSizeFormat}),u&&(0,s.jsx)(E,{isOpen:u,onClose:p,asset:t})]})})}},69851:function(e,t,n){n.d(t,{Kc:function(){return W}});var s,a=n(70865),o=n(96670),i=n(52322),r=n(21647),l=n(89263),c=n(14985),d=n(81643),u=n(14625),p=n(47842),m=n(13011),h=(0,n(8740).ZL)()(function(e){var t=e.breakpoints;return{root:(0,p.Z)({},t.down("lg"),{minWidth:m.r0})}}),x=n(67550),f=n(70180),v=n(62197),b=n(68052),j=n(52417),C=n(65532),g=n(88849),S=n(94656),P=n(64106),w=n(60538),I=n(36532),Z=n(84853),y=n(59877),L=function(e){var t=e.classes,n=void 0===t?{}:t,s=e.caption,a=e.ItemComponent,o=e.onValueChange,r=e.paymentPlans,l=e.selectedPaymentPlanName,c=e.selectedProductLicenseType,d=e.title,u=e.isLicensingDrawer,p=(0,S.l)(w.T).variationId,m=(0,S.l)(P.T).variationId,h=p===g.vG,f=m===g.vG,L="BR"===(0,C.PE)().region,N=(0,I.H)(),k=(0,y.$G)(b.Fx_).t;return(0,i.jsxs)(x.Z,{pb:5,children:[(0,i.jsx)(x.Z,{pb:3,className:n.paymentPlanSelectValueListContainer,children:(0,i.jsx)(j.H,{title:d,values:r,onValueChange:o,ItemComponent:a,itemProps:{selectedItemId:l,selectedProductLicenseType:c}})}),(0,i.jsx)(i.Fragment,{children:(0,Z.FT)(s).map(function(e,t){return(0,i.jsx)(x.Z,{children:(0,i.jsx)(v.Z,{className:n.paymentPlanSelectValueListCaptions,variant:"caption",color:"textSecondary","aria-label":"On Demand Caption",children:h&&L&&r[0].name.includes("credit_pack")&&(0,i.jsxs)(i.Fragment,{children:[k("on_demand_pack_specific_caption",{ns:b.AH})," ",k("prices_shown_in_brl_addl_taxes_may_apply")]})||f&&N&&u&&(0,i.jsxs)(i.Fragment,{children:[k("on_demand_pack_specific_caption",{ns:b.AH})," ",k("prices_shown_in_inr_addl_taxes_may_apply")]})||e})},"cap-".concat(t))})})]})};L.defaultProps={caption:"",onValueChange:function(){},paymentPlans:[],isLicensingDrawer:!1};var N=n(55650),k=n(30902),_=function(e){var t,n,s,a,o,r=e.classes,l=void 0===r?{}:r,c=e.actions,d=e.data,u=e.selectedProductLicenseType,p=e.selectedItemName;return(0,i.jsxs)(i.Fragment,{children:[d.tabs&&(0,i.jsx)(x.Z,{pb:4,className:l.imageProductSelectorComponentTabsContainer,children:(0,i.jsx)(f.Z,{className:l.imageProductSelectorComponentTabs,value:d.tabIndex,onChange:c.onTabChange,indicatorColor:"primary",textColor:"inherit",children:d.tabs.map(function(e){var t=e.label,n=e.analyticsLabel;return(0,i.jsx)(k.O,{className:l.imageProductSelectorComponentTab,label:t,labelTrack:n},t)})})}),(0,i.jsx)(L,{classes:l,caption:null===(t=d.productSelector)||void 0===t?void 0:null===(n=t.labels)||void 0===n?void 0:n.caption,ItemComponent:N.p,onValueChange:c.onItemSelect,paymentPlans:null===(s=d.productSelector)||void 0===s?void 0:s.items,selectedPaymentPlanName:p,selectedProductLicenseType:u,title:null===(a=d.productSelector)||void 0===a?void 0:null===(o=a.labels)||void 0===o?void 0:o.title,isLicensingDrawer:!0})]})};_.defaultProps={action:{},classes:{},data:{}};var z=n(87394),T=n(1104),D=n(60591),F=n(2784),A=n(66680),M=function(){var e,t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},n=t.initialTabIndex,s=t.productSelectorsMap,i=void 0===s?{}:s,r=t.products,l=void 0===r?[]:r,c=t.selectedProductLicenseType,d=t.setSelectedProductToBuy,m=void 0===d?function(){return""}:d,h=t.overrideTabs,x=(0,y.$G)([b.AH,b.Fx_,b.S69]).t,f=(0,C.PE)(),v=(0,z.Z)((0,F.useState)(void 0===n?0:n),2),j=v[0],g=v[1],S=(0,F.useCallback)(function(e,t){g(t)},[]),P=(0,F.useMemo)(function(){return(0,T.Gk)({productSelectorsMap:i,products:l,t:x,locale:f})},[l,i,x,f]),w=(0,F.useMemo)(function(){return(0,T.JU)({tabs:h||u.wZ,t:x})},[x,h]),I=(0,F.useMemo)(function(){return c===D.HS?A.NP:0===j?A.PU:u.Y$},[c,j]),Z=(0,F.useMemo)(function(){return P[I]},[I,P]),L=(0,z.Z)((0,F.useState)((0,T.aY)({productSelectorsMap:P})),2),N=L[0],k=L[1],_=(0,F.useCallback)(function(e){var t=e.name,n=e.product.id;m((0,T.lk)({id:n,products:l})),k(function(e){return(0,o.Z)((0,a.Z)({},e),(0,p.Z)({},I,{name:t,id:n}))})},[I,l,m]),M=null===(e=N[I])||void 0===e?void 0:e.name;return(0,F.useEffect)(function(){if(N&&N[I]){var e=N[I].id;m((0,T.lk)({id:e,products:l}))}},[I,N]),{actions:{onTabChange:S,onItemSelect:_},data:{productSelector:Z,tabs:(0,F.useMemo)(function(){return c===D.HS?null:w},[c,w]),tabIndex:j,selectedItemName:M}}},E=function(e){var t=e.classes,n=void 0===t?{}:t,s=e.initialTabIndex,o=e.products,r=e.productSelectorsMap,l=void 0===r?u.GN:r,c=e.selectedProductLicenseType,d=e.setSelectedProductToBuy,p=e.shouldShowSelection,m=e.overrideTabs,x=h(),f=x.classes,v=x.cx,b=(0,a.Z)({},n,{root:v(f.root,n.root)}),j=M({initialTabIndex:void 0===s?0:s,productSelectorsMap:l,products:o,selectedProductLicenseType:c,setSelectedProductToBuy:d,overrideTabs:void 0===m?void 0:m}),C=j.actions,g=j.data;return(0,i.jsx)(_,{actions:C,classes:b,data:g,selectedProductLicenseType:c,selectedItemName:(void 0===p||p)&&g.selectedItemName||""})},O=function(e){var t=e.initialProps;return(0,i.jsx)(E,(0,a.Z)({},t))},B=(s={},(0,p.Z)(s,g.NM,function(e){var t=e.experiment,n=e.initialProps;return(0,F.useEffect)(function(){t.recordImpression()},[]),(0,i.jsx)(O,{initialProps:n})}),(0,p.Z)(s,g.vG,function(e){var t=e.experiment,n=e.initialProps,s=n.isGenerative?c.jw:c.GN;return(0,F.useEffect)(function(){t.recordImpression()},[]),(0,i.jsx)(O,{initialProps:(0,o.Z)((0,a.Z)({},n),{productSelectorsMap:s,overrideTabs:c.wZ})})}),s),G=(0,o.Z)((0,a.Z)({},c.LL),{treatments:B}),H=function(){return(0,i.jsxs)("div",{"data-automation":"ImageProductSelector_Loading",children:[(0,i.jsx)(r.Z,{variant:"rectangular",height:42,style:{marginBottom:22}}),(0,i.jsxs)("div",{children:[(0,i.jsx)(r.Z,{variant:"rectangular",height:260,style:{marginBottom:8}}),(0,i.jsx)(r.Z,{variant:"rectangular",height:25})]})]})},W=function(e){return(0,d.A)()?(0,i.jsx)(l.K,{config:G,initialProps:e,Portal:O,SkeletonLoader:H}):(0,i.jsx)(O,{initialProps:e})}}}]);
//# sourceMappingURL=74717-75edc659419a082b.js.map