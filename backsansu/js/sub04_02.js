        $(function(){
            var $grid =$('.grid').imagesLoaded(function(){
                $grid.masonry({
                    itemSelector:'.grid-item',
                    columWidth:'.grid-sizer',
                    percentPosition:true
                });//masonry
            })

        }); //JQuery 종료