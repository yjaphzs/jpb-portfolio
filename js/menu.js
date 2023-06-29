$(document).ready(function(){
var timeOut;

class Item {
    constructor(icon, backgroundColor, link, name) {
        this.$element = $(document.createElement("a"));
        this.icon = icon;
        this.$element.addClass("item");
        this.$element.attr("href",link);
        this.$element.attr("target","_blank");
        this.$element.css("background-color", backgroundColor);
        var i = document.createElement("i");
        $(i).addClass(icon);
        this.$element.append(i);
        var span = document.createElement("span")
        $(span).append(name);
        this.$element.append(span);
        this.prev = null;
        this.next = null;
        this.isMoving = false;
        var element = this;
        this.$element.on("mousemove", function() {
            clearTimeout(timeOut);
            timeOut = setTimeout(function() {
                if (element.next && element.isMoving) {
                    element.next.moveTo(element);
                } 
            }, 10);
        });
    }
    
    moveTo(item) {
        anime({
            targets: this.$element[0],
            left: item.$element.css("left"),
            top: item.$element.css("top"),
            duration: 700,
            elasticity: 500
        });
        if (this.next) {
            this.next.moveTo(item);
        }
    }

    updatePosition() {    
        anime({
            targets: this.$element[0],
            left: this.prev.$element.css("left"),
            top: this.prev.$element.css("top"),
            duration: 80
        });
        
        if (this.next) {
            this.next.updatePosition();
        }
    }
}

class Menu {
    constructor(menu) {
        this.$element = $(menu);
        this.size = 0;
        this.first = null;
        this.last = null;
        this.timeOut = null;
        this.hasMoved = false;
        this.status = "closed";
    }
    
    add(item) {
        var menu = this;
        if (this.first == null) {
            this.first = item;
            this.last = item;
            this.first.$element.on("mouseup", function() {
                if (menu.first.isMoving) {
                    menu.first.isMoving = false;        
                } else {
                    menu.click();
                }
            }); 
            // item.$element.draggable(
            //     {
            //         start: function() {
            //             menu.close();
            //             item.isMoving = true;
            //         }  
            //     },
            //     {
            //         drag: function() {
            //             if (item.next) {
            //                 item.next.updatePosition();
            //             }
            //         }
            //     },
            //     {
            //         stop: function() {
            //             item.isMoving = false;
            //             item.next.moveTo(item);
            //         }
            //     }
            // );
        } else {
            this.last.next = item;
            item.prev = this.last;
            this.last = item;
        }
        this.$element.after(item.$element);
        
        
    }
    
    open() {
        this.status = "open";
        var current = this.first.next;
        var iterator = 1;
        var head = this.first;
        // var bounding = head.$element.offset();
        var viewportWidth = $(window).width() / 2;
        // var viewportHeight = $(window).height();
        // var sens = bounding.left < viewportWidth ? 1 : -1;
        var sens = -1;
        var sens2 = 1;
        while (current != null) {
            if(viewportWidth > 425){
                anime({
                    targets: current.$element[0],
                    left: parseInt(head.$element.css("left"), 10) + (sens * (iterator * 45)),
                    top: head.$element.css("top"),
                    duration: 500
                });
            }
            else{
                anime({
                    targets: current.$element[0],
                    top: parseInt(head.$element.css("top"), 10) + (sens2 * (iterator * 45)),
                    duration: 500
                });
            }
            iterator++;
            current = current.next;
        }    
    }
    
    close() {
        this.status = "closed";
        var current = this.first.next;
        var head = this.first;
        var iterator = 1;
        while (current != null) {
            anime({
                targets: current.$element[0],
                left: head.$element.css("left"),
                top: head.$element.css("top"),
                duration: 500
            });
            iterator++;
            current = current.next;
        }
    }
    
    click() {
        if (this.status == "closed") {
            this.open();
            anime({
                targets: "#navigation .item",
                borderRadius: "0",
                duration: 100
            });
        } else {
            this.close();
            anime({
                targets: "#navigation .item",
                borderRadius: "50%",
                duration: 100
            });
        }
    }
    
}

    var menu2 = new Menu("#myMenu");
    var item1 = new Item("fa fa-bars","#fdcd0b");
    var item2 = new Item("fa fa-envelope","","mailto:yjaphzs@gmail.com","Gmail");
    var item3 = new Item("fab fa-linkedin-in","","http://www.linkedin.com/in/yjaphzs","Linkedin");
    var item4 = new Item("fab fa-facebook-f","","http://www.facebook.com/yjaphzs","Facebook");
    var item5 = new Item("fab fa-instagram","","http://www.instagram.com/yjaphzs","Instagram");
    var item6 = new Item("fab fa-twitter","","http://www.twitter.com/yjaphzs","Twitter");
    var item7 = new Item("fa fa-link","","","Other Link");

    menu2.add(item1);
    menu2.add(item2);
    menu2.add(item3);
    menu2.add(item4);
    menu2.add(item5);
    menu2.add(item6);
    menu2.add(item7);

});

