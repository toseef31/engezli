function load(){var e=payment_key_claims.token,t=payment_key_claims.masked_pan;if(e){document.querySelector("[paymob_field=card_number]").value=t,document.querySelector("[paymob_field=card_number]").disabled=!0;var n=document.querySelector("[paymob_field=card_holdername]");n.value="xxxxx xxxxx",n.disabled=!0;var a=document.querySelector("[paymob_field=card_expiry_mm]");a.value="xx",a.disabled=!0;var i=document.querySelector("[paymob_field=card_expiry_yy]");i.value="xx",i.disabled=!0;document.querySelector("[paymob_field=subtype]").disabled=!0,document.querySelector('input[name="save card"]').disabled=!0}document.getElementById("paymob_checkout").addEventListener("submit",function(t){var n,a,i,l,s,c,r,o,d;t.preventDefault(),n=document.querySelector("[paymob_field=card_number]").value,a=document.querySelector("[paymob_field=card_holdername]").value,i=document.querySelector("[paymob_field=card_expiry_mm]").value,l=document.querySelector("[paymob_field=card_expiry_yy]").value,s=document.querySelector("[paymob_field=card_number]").disabled,c=document.querySelector("[paymob_field=card_holdername]").disabled,r=document.querySelector("[paymob_field=card_expiry_mm]").disabled,o=document.querySelector("[paymob_field=card_expiry_yy]").disabled,d=document.querySelector("[paymob_field=card_cvn]").value,(""==n||""==a||""==i||""==l||""==d?(alert("All card detail fields are mandatory"),0):s&&c&&r&&o?3==d.length||!isNaN(d)||(alert("Please enter a valid cvv, example: 392"),0):isNaN(n)||isNaN(i)||isNaN(l)||isNaN(d)?isNaN(n)?(alert("Only numerical values are accepted for card number field"),0):isNaN(i)||isNaN(l)?(alert("Only numerical values are accepted for card expiry fields"),0):isNaN(d)?(alert("Only numerical values are accepted for card cvv field"),0):void 0:i<1||i>12?(alert("Please enter a valid card expiry month, example: 05"),0):2!=l.length&&4!=l.length?(alert("Please enter a valid card expiry year, example: 22 or 2022"),0):3==d.length||(alert("Please enter a valid cvv, example: 392"),0))&&(document.querySelector("input[type=submit]").disabled=!0,function(){var t=document.querySelector("[paymob_field=card_number]").value,n=document.querySelector("[paymob_field=card_holdername]").value,a=document.querySelector("[paymob_field=card_expiry_mm]").value,i=document.querySelector("[paymob_field=card_expiry_yy]").value,l=document.querySelector("[paymob_field=card_cvn]").value,s=document.querySelector("[paymob_field=subtype]").value,c=document.querySelector('input[name="save card"]:checked'),r=null;try{(r=document.querySelector("[paymob_field=tenure]").value)||(r=null)}catch(e){r=null}if(4==i.length&&(i=i.slice(-2)),e){c=!1;var o={identifier:e,subtype:"TOKEN",cvn:l}}else o={identifier:t,sourceholder_name:n,subtype:s,expiry_month:a,expiry_year:i,cvn:l,tenure:r};var d=new XMLHttpRequest;d.open("POST","/api/acceptance/payments/pay"),d.setRequestHeader("Content-Type","application/json; charset=utf-8");var u={source:o,billing:payment_key_claims.shipping_data?payment_key_claims.shipping_data:payment_key_claims.billing_data,payment_token:payment_key,api_source:"IFRAME"},m=JSON.stringify(u);if(d.send(m),d.onreadystatechange=function(){if(4===d.readyState)try{if((n=JSON.parse(d.response)).bypass_step_six)if(n.use_redirection)window.top.location.href=n.redirection_url;else try{var e=n.merchant_response;(n=JSON.parse(e)).paymob_redirect_url?window.top.location.href=n.paymob_redirect_url:(a=document.getElementsByTagName("body"))&&(a[0].innerHTML=e)}catch(t){(a=document.getElementsByTagName("body"))&&(a[0].innerHTML=e)}else if(void 0===(e=n.merchant_response))if(422==d.status){var t=JSON.parse(d.response).redirect;null!=t?window.top.location.href=t:(a=document.getElementsByTagName("body"))&&(a[0].innerHTML=d.response)}else(a=document.getElementsByTagName("body"))&&(a[0].innerHTML=d.response);else try{var n;(n=JSON.parse(e)).paymob_redirect_url?window.top.location.href=n.paymob_redirect_url:(a=document.getElementsByTagName("body"))&&(a[0].innerHTML=e)}catch(t){(a=document.getElementsByTagName("body"))&&(a[0].innerHTML=e)}}catch(e){var a;(a=document.getElementsByTagName("body"))&&(a[0].innerHTML=d.response)}},c){var p=payment_key_claims.shipping_data?payment_key_claims.shipping_data:payment_key_claims.billing_data,y=void 0;p&&(y=p.email);var _={pan:o.identifier,expiry_month:o.expiry_month,expiry_year:o.expiry_year,cardholder_name:n,order_id:payment_key_claims.order_id,email:y},v=new XMLHttpRequest,b=encodeURIComponent("payment_token")+"="+encodeURIComponent(payment_key);v.open("POST","/api/acceptance/tokenization?"+b),v.setRequestHeader("Content-Type","application/json; charset=utf-8");var f=JSON.stringify(_);v.send(f)}}())});try{!function(){var e,t="https://"+window.location.hostname,n=payment_key,a=!1,i=null;c();var l="";function s(){var e={identifier:l,sourceholder_name:"Test Account",expiry_month:"05",expiry_year:"21",subtype:"CARD",cvn:"123",payment_token:n},s=JSON.stringify(e);$("#submitButton").css("display","none"),$("#submitButtonWaiting").css("display","block"),$.ajax({url:t+"/api/acceptance/transaction_discount",type:"post",data:s,headers:{"Content-Type":"application/json"},dataType:"json",success:function(e){a=!0,i=e.discount_amount_cents,function(e){var t;t="ILS"===payment_key_claims.currency?(e/1e3).toFixed(2):(e/100).toFixed(2);var n="PAY "+t+" "+payment_key_claims.currency;$("#submitButton").val(n),$("#submitButtonWaiting").css("display","none"),$("#submitButton").css("display","block")}(e.discount_amount_cents),$("#discountMessgae").text(e.message).css("display","block"),r()},error:function(e){a=!1,i=null,c(),$("#discountMessgae").text("").css("display","none"),r()}})}function c(){var e="PAY "+("ILS"===payment_key_claims.currency?(payment_key_claims.amount_cents/1e3).toFixed(2):(payment_key_claims.amount_cents/100).toFixed(2))+" "+payment_key_claims.currency;$("#submitButton").val(e),$("#submitButtonWaiting").css("display","none"),$("#submitButton").css("display","block")}function r(){var a={card_pin:l,payment_token:n},i=JSON.stringify(a);$.ajax({url:t+"/api/auth/bank-installments",type:"post",data:i,headers:{"Content-Type":"application/json"},dataType:"json",success:function(t){!function(t){e=t,$("#checkInstallmentBtn").css("display","block"),$(".checkInstallmentTextDiv").css("display","block"),$(".installmentsDiv").css("display","none")}(t)},error:function(e){$("#checkInstallmentBtn").css("display","none"),$(".checkInstallmentTextDiv").css("display","none"),$(".installmentsDiv").css("display","none")}})}function o(){$(".installmentsHead > img").attr("src",e.bank_logo);var t=e.installments;t.sort(d);let n="";for(var l=0;l<t.length;l++){var s;s="ILS"===payment_key_claims.currency?t[l].emi/1e3:t[l].emi/100,n+='\n\t\t\t\t\t<div class="installmentsEle">\n\t\t\t\t\t\t<p>'+t[l].tenure+" Months</p>\n\t\t\t\t\t\t<span>"+s+" "+payment_key_claims.currency+'/M</span>\n\t\t\t\t\t\t<input id="installmentTenure" type="hidden" value="'+t[l].tenure+'" />\n\t\t\t\t\t\t<input id="installmentTenureId" type="hidden" value="'+t[l].id+'" />\n\t\t\t\t\t\t<input id="installmentValue" type="hidden" value="'+s+'" />\n\t\t\t\t\t</div>'}var c;let r;"ILS"===payment_key_claims.currency?(c=e.amount_cents/1e3,r=i/1e3):(c=e.amount_cents/100,r=i/100),n+=a?'\n\t\t\t\t<div class="installmentsEle">\n\t\t\t\t\t<p>No Installment</p>\n\t\t\t\t\t<span>'+r+" "+payment_key_claims.currency+'</span>\n\t\t\t\t\t<input id="installmentTenure" type="hidden" value="0" />\n\t\t\t\t\t<input id="installmentTenureId" type="hidden" value="" />\n\t\t\t\t\t<input id="installmentValue" type="hidden" value="'+r+'" />\n\t\t\t\t</div>':'\n\t\t\t\t\t<div class="installmentsEle">\n\t\t\t\t\t\t<p>No Installment</p>\n\t\t\t\t\t\t<span>'+c+" "+payment_key_claims.currency+'</span>\n\t\t\t\t\t\t<input id="installmentTenure" type="hidden" value="0" />\n\t\t\t\t\t\t<input id="installmentTenureId" type="hidden" value="" />\n\t\t\t\t\t\t<input id="installmentValue" type="hidden" value="'+c+'" />\n\t\t\t\t\t</div>',n+='\n\t\t\t\t<div class="installmentsSubmitDiv">\n\t\t\t\t\t<input id="installmentsSubmitButton" type="submit" value="PAY" class="submit" disabled>\n\t\t\t\t</div>',$("#installmentsBody").html(n),$(".installmentsEle").click(function(){$(".installmentsEle").removeClass("selected"),$(this).addClass("selected");var e=$(this).children("#installmentTenure").val();$("#tenureHiddenInput").val(e);var t=$(this).children("#installmentValue").val();$("#installmentsSubmitButton").val("PAY "+t+" "+payment_key_claims.currency),$("#installmentsSubmitButton").prop("disabled",!1)}),$("#installmentsSubmitButton").click(function(){$("#submitButton").prop("disabled",!1).click().prop("disabled",!0)})}function d(e,t){return e.tenure<t.tenure?-1:e.tenure>t.tenure?1:0}$("#number").change(function(){var t=$("#number").val().replace(/\s/g,""),n="";t.length>=6?(n=t.slice(0,6)+"0000000000",l!==n&&(l=n,s())):(l="",a=!1,i=null,c(),$("#discountMessgae").text("").css("display","none"),e={},$("#submitButton").prop("disabled",!1),$(".card-footer > span").css("display","block"),$("#checkInstallmentBtn").css("display","none"),$(".checkInstallmentTextDiv").css("display","none"),$(".installmentsDiv").css("display","none"),$("#tenureHiddenInput").val(""))}),$(".checkInstallmentTextDiv > span").click(function(){o(),$(".checkInstallmentTextDiv").css("display","none"),$(".card-footer > span").css("display","none"),$("#checkInstallmentBtn").css("display","none"),$("#submitButtonWaiting").css("display","none"),$("#submitButton").css("display","block"),$("#submitButton").prop("disabled",!0),$(".installmentsDiv").css("display","block")}),$("#checkInstallmentBtn").click(function(){o(),$(".checkInstallmentTextDiv").css("display","none"),$(".card-footer > span").css("display","none"),$("#checkInstallmentBtn").css("display","none"),$("#submitButtonWaiting").css("display","none"),$("#submitButton").css("display","block"),$("#submitButton").prop("disabled",!0),$(".installmentsDiv").css("display","block")})}()}catch(e){}}window.onload=load;