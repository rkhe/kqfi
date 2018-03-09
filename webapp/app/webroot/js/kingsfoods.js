
var kqfi = {
	
};

var kqfi_products = {
    theLeftValue: false,
    initialize: function(){
        if (this.theLeftValue === false)
            this.theLeftValue = parseInt($('#divCategories').css('left'));
    },
	arrowClick: function(direction){
		if (direction === 'left'){
            if (this.theLeftValue > -690) {
                this.theLeftValue -= 191;
				$('#divCategories').animate({
					left: "-=191"
				}, 300, function() {
				// Animation complete.
				});
			}
		} else {
			if (this.theLeftValue < 0) {
                this.theLeftValue += 191;
				$('#divCategories').animate({
					left: "+=191"
				}, 300, function() {
				// Animation complete.
				});
			}
		}
	},
	
};