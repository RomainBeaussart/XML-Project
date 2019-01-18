(function ($) {
    $.fn.SocialCounter = function (options) {
        var settings = $.extend({
            // These are the defaults.
            twitter_user: '',
            facebook_user: '',
            facebook_token: '',
        }, options);


        function facebook() {
            //Facebook API
            //60 Day Access Token - Regenerate a new one after two months
            //https://neosmart-stream.de/facebook/how-to-create-a-facebook-access-token/
            //https://smashballoon.com/custom-facebook-feed/access-token/
            $.ajax({
                url: 'https://graph.facebook.com/v2.8/' + settings.facebook_user,
                dataType: 'json',
                type: 'GET',
                data: {
                    access_token: settings.facebook_token,
                    fields: 'fan_count'
                },
                success: function (data) {
                    var followers = parseInt(data.fan_count);
                    var k = kFormatter(followers);
                    $('.item.facebook .count').append(k);
                    getTotal(followers);
                }
            });
        }

        function twitter() {
            //Twitter API - Requires PHP.
            //References
            //http://stackoverflow.com/questions/17409227/follower-count-number-in-twitter
            //https://github.com/J7mbo/twitter-api-php
            $.ajax({
                url: 'http://juanvargas.net/SocialCounters/twitter/index.php',
                dataType: 'json',
                type: 'GET',
                data: {
                    user: settings.twitter_user
                },
                success: function (data) {
                    var followers = parseInt(data.followers);
                    $('.item.twitter .count').append(followers).digits();
                    getTotal(followers);
                }
            });
        }

        //Function to add commas to the thousandths
        $.fn.digits = function () {
                return this.each(function () {
                    $(this).text($(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                })
            }
            //Function to add K to thousands
        function kFormatter(num) {
            return num > 999 ? (num / 1000).toFixed(1) + 'k' : num;
        }

        //Call Functions
        if (settings.twitter_user != '') {
            twitter();
        }
        if (settings.facebook_user != '' && settings.facebook_token != '') {
            facebook();
        }
    };
}(jQuery));
