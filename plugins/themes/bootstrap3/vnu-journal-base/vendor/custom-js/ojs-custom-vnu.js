if ($("a").hasClass('redirectLink')) {
    window.setInterval(function() {
        location.href = $('.redirectLink').attr('href');
    }, 10000);
    // console.log("found");
}

$(".uploadField").change(function(ev) {
    console.log("changed")
    setTimeout(function() {
        $("[name='uploadSubmissionFile']").click();
    }, 1000);
    $(".loading-image").show();
});

$(".uploadField").change(function(ev) {
    console.log("changed")
    setTimeout(function() {
        $("[name='submitUploadSuppFile']").click();
    }, 1000);
    $(".loading-image").show();
});
