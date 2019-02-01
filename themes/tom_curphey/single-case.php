<?php
/*
Template Name: Case Study
*/
get_header();
?>
  <main id="main_body" onclick="menuCheck();" class="case_study">
    <?php $image = get_template_directory_uri() . '/images/video.png'; ?>
    <section class="case_header" style="background-image: url(<?php echo $image ?>);">
      <?php // get_case_study(get_the_ID()) ?>
      <div class="title_wrapper">
        <div class="title_box">
          <h1>Bay City Burrito</h1>
        </div>
      </div>
    </section>
    <div class="to_make_the_sticky_menu_work_sad_face">
      <section class="case_content">
        <section class="stats"> 
          <ul>
            <li>
              <div style="background-image: url(<?php echo $image ?>);"></div>
            </li>
            <li><h4>Engagement</h4><span>2018 - Current</span></li>
            <li><h4>Sales Growth</h4><span>38%</span></li>
            <li><h4>Lead Conversion</h4><span>12%</span></li>
            <li><h4>Website Traffic</h4><span>22%</span></li>
            <li class="quote"><span>"</span><p>Tom is a great asset to our team</p><span>"</span></li>
            <li><a href="!#">Hospitality</a><a href="!#">Marketing</a></li> 
          </ul>
        </section>
        <div class="content_wrapper">
          <section class="challenge">
            <h2>The Challenge</h2>
            <ul>
              <li>Increase Revenue</li>
              <li>Optimise Lead conversion</li>
            </ul>
          </section>
          <section class="solution">
            <h2>Solution</h2>
            <ul>
              <li>Fix leaky bucket</li>
              <li>Sync Key Brand Messages</li>
            </ul>
          </section>
          <section class="step">
            <h2>Step By Step</h2>
            <div class="my-gallery step" itemscope itemtype="http://schema.org/ImageGallery">
              <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" itemprop="contentUrl" data-size="1024x1024" class="step">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)"  alt="Introducing Tom Curphey">
                <p class="step">Yes</p>
                </a>
                <figcaption itemprop="caption description" class="details">
                  <div class="details">
                    <div class="step_title"><span>STEP 1</span><h3>Are we on the same page for real are we? Thats great!</h3></div>
                    <?php convertToList('Hey D, Hey D, Hey D') ?>
                  </div>
                </figcaption>
                                                    
              </figure>
              <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" itemprop="contentUrl" data-size="1024x1024" class="step">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)"  alt="Introducing Tom Curphey">
                <p>Set Up Benchmarks</p>
                <p class="next_time">Completion</p> 
                </a>
                <figcaption itemprop="caption description" class="details">
                  <div class="details">
                    <div class="step_title"><span>STEP 2</span><h3>Are we on the same page for real are we? Thats great!</h3></div>
                    <?php convertToList('Hey D, Hey D, Hey D') ?>
                  </div>
                </figcaption>
                                                    
              </figure>
            </div>
          </section>
        </div>
      </section>
    </div>
    <section class="hindsight">
      <h2>Hindsight</h2>
      <p>What I learned & How I would approach this sistuation differently next time</p>
      <ul>
        <li>Defining the outcome up front & reviewing it each month was an important step to ensure we are both on the same page</li>
        <li>Outsourcing repeative tasks so I could focus on the value adding tasks as a priority</li>
      </ul>

    </section>
    
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

      <!-- Background of PhotoSwipe. It's a separate element, as animating opacity is faster than rgba(). -->
      <div class="pswp__bg"></div>
      <!-- Slides wrapper with overflow:hidden. -->
      <div class="pswp__scroll-wrap">
        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </main>

  <script>
    var initPhotoSwipeFromDOM = function(gallerySelector) {
	// parse slide data (url, title, size ...) from DOM elements
	// (children of gallerySelector)
	var parseThumbnailElements = function(el) {
		var thumbElements = el.childNodes,
			numNodes = thumbElements.length,
			items = [],
			figureEl,
			linkEl,
			size,
			item;

		for (var i = 0; i < numNodes; i++) {
			figureEl = thumbElements[i]; // <figure> element

			// include only element nodes
			if (figureEl.nodeType !== 1) {
				continue;
			}

			linkEl = figureEl.children[0]; // <a> element

			size = linkEl.getAttribute('data-size').split('x');

			// create slide object
			item = {
				src: linkEl.getAttribute('href'),
				w: parseInt(size[0], 10),
				h: parseInt(size[1], 10)
			};

			if (figureEl.children.length > 1) {
				// <figcaption> content
				item.title = figureEl.children[1].innerHTML;
			}

			if (linkEl.children.length > 0) {
				// <img> thumbnail element, retrieving thumbnail url
				item.msrc = linkEl.children[0].getAttribute('src');
			}

			item.el = figureEl; // save link to element for getThumbBoundsFn
			items.push(item);
		}

		return items;
	};

	// find nearest parent element
	var closest = function closest(el, fn) {
		return el && (fn(el) ? el : closest(el.parentNode, fn));
	};

	// triggers when user clicks on thumbnail
	var onThumbnailsClick = function(e) {
		e = e || window.event;
		e.preventDefault
			? e.preventDefault()
			: (e.returnValue = false);

		var eTarget = e.target || e.srcElement;

		// find root element of slide
		var clickedListItem = closest(eTarget, function(el) {
			return (
				el.tagName && el.tagName.toUpperCase() === 'FIGURE'
			);
		});

		if (!clickedListItem) {
			return;
		}

		// find index of clicked item by looping through all child nodes
		// alternatively, you may define index via data- attribute
		var clickedGallery = clickedListItem.parentNode,
			childNodes = clickedListItem.parentNode.childNodes,
			numChildNodes = childNodes.length,
			nodeIndex = 0,
			index;

		for (var i = 0; i < numChildNodes; i++) {
			if (childNodes[i].nodeType !== 1) {
				continue;
			}

			if (childNodes[i] === clickedListItem) {
				index = nodeIndex;
				break;
			}
			nodeIndex++;
		}

		if (index >= 0) {
			// open PhotoSwipe if valid index found
			openPhotoSwipe(index, clickedGallery);
		}
		return false;
	};

	// parse picture index and gallery index from URL (#&pid=1&gid=2)
	var photoswipeParseHash = function() {
		var hash = window.location.hash.substring(1),
			params = {};

		if (hash.length < 5) {
			return params;
		}

		var vars = hash.split('&');
		for (var i = 0; i < vars.length; i++) {
			if (!vars[i]) {
				continue;
			}
			var pair = vars[i].split('=');
			if (pair.length < 2) {
				continue;
			}
			params[pair[0]] = pair[1];
		}

		if (params.gid) {
			params.gid = parseInt(params.gid, 10);
		}

		return params;
	};

	var openPhotoSwipe = function(
		index,
		galleryElement,
		disableAnimation,
		fromURL
	) {
		var pswpElement = document.querySelectorAll('.pswp')[0],
			gallery,
			options,
			items;

		items = parseThumbnailElements(galleryElement);

		// define options (if needed)
		options = {
			// define gallery index (for URL)
			galleryUID: galleryElement.getAttribute('data-pswp-uid'),

			getThumbBoundsFn: function(index) {
				// See Options -> getThumbBoundsFn section of documentation for more info
				var thumbnail = items[index].el.getElementsByTagName(
						'img'
					)[0], // find thumbnail
					pageYScroll =
						window.pageYOffset ||
						document.documentElement.scrollTop,
					rect = thumbnail.getBoundingClientRect();

				return {
					x: rect.left,
					y: rect.top + pageYScroll,
					w: rect.width
				};
			}
		};

		// PhotoSwipe opened from URL
		if (fromURL) {
			if (options.galleryPIDs) {
				// parse real index when custom PIDs are used
				// http://photoswipe.com/documentation/faq.html#custom-pid-in-url
				for (var j = 0; j < items.length; j++) {
					if (items[j].pid == index) {
						options.index = j;
						break;
					}
				}
			} else {
				// in URL indexes start from 1
				options.index = parseInt(index, 10) - 1;
			}
		} else {
			options.index = parseInt(index, 10);
		} 

		// exit if index not found
		if (isNaN(options.index)) {
			return;
		}

		if (disableAnimation) {
			options.showAnimationDuration = 0; 
		}

		// Pass data to PhotoSwipe and initialize it
		gallery = new PhotoSwipe(
			pswpElement,
			PhotoSwipeUI_Default,
			items,
			options
		);
		gallery.init();
	};

	// loop through all gallery elements and bind events
	var galleryElements = document.querySelectorAll(gallerySelector);

	for (var i = 0, l = galleryElements.length; i < l; i++) {
		galleryElements[i].setAttribute('data-pswp-uid', i + 1);
		galleryElements[i].onclick = onThumbnailsClick;
	}

	// Parse URL and open gallery if it contains #&pid=3&gid=1
	var hashData = photoswipeParseHash();
	if (hashData.pid && hashData.gid) {
		openPhotoSwipe(
			hashData.pid,
			galleryElements[hashData.gid - 1],
			true,
			true
		);
	}
};

// execute above function
initPhotoSwipeFromDOM('.my-gallery');

  </script>
<?php
get_footer();