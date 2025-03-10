

function validateInputById(inputId){
    var input = $("#"+inputId);
   
    if (input.val()=="" || input.val() == null || input.val().length ==0){
        input.addClass("border border-danger");
        return 1;
    } else {
        input.removeClass("border border-danger");
        return 0;
    }
    
}

function validateInputCheckBox(id){
    var input = $("#"+id);
    var inputClass = $("."+id+"-holder")
   
    if (input.is(":checked")){
        inputClass.removeClass("border border-danger");
        return 0;
    } else {
        inputClass.addClass("border border-danger");
       
        return 1;
    }
    
}

function validateInputRadio(radioInputs, holderclass){
    var selected = 0;
    for (i=0;i<radioInputs.length;i++){
        var input = $("#"+radioInputs[i]);
        if (input.is(':checked')){
            selected++;
        }
    }
  
    if (selected==0){
        $("."+holderclass).addClass("border border-danger");
        return 1;
    } else {
         $("."+holderclass).removeClass("border border-danger");
        return 0;
    }
    
    
}


// ON NEWS SELECT : HOME //
function onNewsClick(id) {
    var url = "getnews";
    
    $(".news-list-item").removeClass("active");
    $("#news-item-"+id).addClass("active");
    $.post(url,{
        id: id
    }, function(xml) {

        $("#home_news_title").html( $("title",xml).text() );
        $("#home_news_author").html( $("author",xml).text() );
        $("#home_news_date").html( $("date",xml).text() );
        
        $("#home_news_title").attr("href", "article?t=n&id="+$("id",xml).text());
        $("#home_news_more").attr("href",  "article?t=n&id="+$("id",xml).text());
       
        $("#home_news_body").html( $("body",xml).text() );  
        $("#home_news_img").attr("src", $("imagelink",xml).text());
        $("#home_news_img").attr("onerror", "this.src='resources/images/1000x700.png'");
        
        var tags = $("tags",xml).text();
        var tagList = tags.split(" ");
        var i;
        if (id!=null) {
             $("#taglist").html("");
            for (i = 0; i < tagList.length; ++i) {
                $("#taglist").append(
                    '<li class="list-inline-item me-2 mb-2">' + 
                        '<a class="tag" href="#">'  +
                            '<i class="fa fa-tags"></i>' + tagList[i] + '</a>' +
                    '</li>'
                );
            }
        }
    });
    
    return false;
}

//CONTACT FORM


function validateCareerForm() {
    var errors = 0;
    
    if ( $("#career-form-companyname").val().length <= 0 ) {
        errors++;
        $("#career-form-companyname").addClass("border border-danger");
    } else {
        $("#career-form-companyname").removeClass("border border-danger");
    }
    
    if ( $("#career-form-email").val().length <= 0 ) {
        errors++;
        $("#career-form-email").addClass("border border-danger");
    } else {
        $("#career-form-email").removeClass("border border-danger");
    }
    
    if ( $("#career-form-industry").val().length <= 0 ) {
        errors++;
        $("#career-form-industry").addClass("border border-danger");
    } else {
        $("#career-form-industry").removeClass("border border-danger");
    }
    
    
    if ( $("#career-form-message").val().length <= 0 ) {
        errors++;
        $("#career-form-message").addClass("border border-danger");
    } else {
        $("#career-form-message").removeClass("border border-danger");
    }
    
    if (errors>0) {
        return false;
    } else if (errors==0) {
        return true;
    }
    
}

function validateHomeContactForm() {
    var errors = 0;
    
    if ( $("#contact-form-name").val().length <= 0 ) {
        errors++;
        $("#contact-form-name").addClass("border border-danger");
    } else {
        $("#contact-form-name").removeClass("border border-danger");
    }
    
    if ( $("#contact-form-email").val().length <= 0 ) {
        errors++;
        $("#contact-form-email").addClass("border border-danger");
    } else {
        $("#contact-form-email").removeClass("border border-danger");
    }
    
    if ( $("#contact-form-course").val().length <= 0 ) {
        errors++;
        $("#contact-form-course").addClass("border border-danger");
    } else {
        $("#contact-form-course").removeClass("border border-danger");
    }
    
    if ( $("#contact-form-program").val().length <= 0 ) {
        errors++;
        $("#contact-form-program").addClass("border border-danger");
    } else {
        $("#contact-form-program").removeClass("border border-danger");
    }
    
    if ( $("#contact-form-message").val().length <= 0 ) {
        errors++;
        $("#contact-form-message").addClass("border border-danger");
    } else {
        $("#contact-form-message").removeClass("border border-danger");
    }
    
    if (errors>0) {
        return false;
    } else if (errors==0) {
        return true;
    }
    
}

