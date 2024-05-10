
// <----tag script functions here ---->
export  class HtmlScript {

	HtmlScript() {
    // Estado inicial do carro (desligado)
  }

 tag_Script_info_user (vetJsonInfoSession){ //username,dep,iduser

  				$("UserName").attr("class","UserName" );
				$("Dep").attr("class", "Dep" );
				$("IdUser").attr("class", "IdUser" );
				//futuramente adcionar mais componentes
let idsTags = ["UserName","Dep","IdUser"];

				/*var elementUserName =document.getElementsByClassName("UserName");
				
				var elementUserName=document.getElementById("Dep").innerHTML+=vetJsonInfoSession[1];
				var elementUserName =document.getElementById("IdUser").innerHTML+=vetJsonInfoSession[2];*/

			for(var j=0;j<idsTags.length;j++){
						var elements=document.getElementsByClassName(idsTags[j]);
				for(var i = 0; i < elements.length; i++) {
     			elements[i].innerHTML=vetJsonInfoSession[j];
				}

			}	

				



  }   

  tag_Script_style_generic (){ 

  				$("text1").attr("style","color:#AFC8C9;" );
  				$("text2").attr("style","color:#9FD7CD;" );
  				$("text3").attr("style","color:#9AE5C3;" );
				$("text4").attr("style","color:#A9F0AD;" );
				$("text5").attr("style","color:#CBF68F;" );
				$("text6").attr("style","color:#F9F871;" );
				$("text7").attr("style","color:#9FD7CD;" );
				$("text8").attr("style","color:#CBF68F;" );

				//futuramente adcionar mais componentes
				

  } 

  tag_Script_style_Matching_Gradient (){ 

  				$("textMatching_Gradient1").attr("style","color:#AFC8C9;" );
  				$("textMatching_Gradient2").attr("style","color:#96B3BF;" );
  				$("textMatching_Gradient3").attr("style","color:#889BB3;" );
				$("textMatching_Gradient4").attr("style","color:#8582A1;" );
				$("textMatching_Gradient5").attr("style","color:#866885;" );
				$("textMatching_Gradient6").attr("style","color:#824F60;" );
				

				//futuramente adcionar mais componentes
				

  } 

   tag_Script_style_Switch_Palette (){ 

  				$("textSwitch_Palette1").attr("style","color:#AFC8C9;" );
  				$("textSwitch_Palette2").attr("style","color:#1E3334;" );
  				$("textSwitch_Palette3").attr("style","color:#C65410;" );
				$("textSwitch_Palette4").attr("style","color:#7AB2B4;" );
				
				

				//futuramente adcionar mais componentes
				} 


				 tag_Script_Style () { 

  				$("Maiusc").attr("style", "text-transform: uppercase;color:#0e0e3f; font-weight: 600;" );
  				
				
				console.log("testcolor");

				//futuramente adcionar mais componentes
				

  				} 
  

}