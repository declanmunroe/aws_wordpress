google.load("feeds", "1");
    function OnLoad() {
        var feedControl = new google.feeds.FeedControl();
        feedControl.setNumEntries(6);
        var maxSnippetLength = 400;
        var gfLoad = google.feeds.Feed.prototype.load;
        google.feeds.Feed.prototype.load =
            function (callback) {
                gfLoad.call(this,
                    function (feedResult) {
                        var entries = feedResult.feed.entries;
                        var ad_1 = "";
                        var ad_2 = "";
                        for (var i = 0, entry; entry = entries[i]; i++) {
                            var snip = entry.content;
                            snip = snip.replace("Read more", "");
                            snip = snip.replace(/<[^>]+>/g, '');
                            if (snip.length > maxSnippetLength) {
                                snip = snip.substr(0, maxSnippetLength);
                                snip = snip.replace(/<[^>]+>/g, '').replace(/^\s+|\s+$/g, '');
                                snip = snip + ' ...';
                            }
                            var bar = snip.indexOf("loadposition");
                        }
                        callback(feedResult);
                    }
                );
            };
        feedControl.addFeed("http://www.ecdl.org/rss_blog.jsp?blogID=1", "");
        feedControl.draw(document.getElementById("ics_rss"));
    }
    google.setOnLoadCallback(OnLoad);