<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loran Conversion</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uswds/3.4.1/js/uswds-init.min.js" integrity="sha512-O4/iaC7XNMEYqktWqYtH6Rg++++GZAdUMITJVzu0D1X4ckQyXHJOoC4SC4Ivwsr8YMTjhSnDxem0Ac62IQuG1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uswds/3.4.1/css/uswds.min.css" integrity="sha512-nYgdbDiCeQ9s5EjMxfTPEr2jXvaWiH/U9IZ6vokGGS35xWxyGRVlyDTnk8XqrTFkWGCbWGEinaRB4dwCs8S7cQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
      function buttonShow() {
        var r = document.getElementById("results");
        if(r.style.display=== "none"){
          r.style.display = "block";
        } else {
          r.style.display = "none";
        }
      }
    </script>
  </head>
  <body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uswds/3.4.1/js/uswds.min.js" integrity="sha512-BHCIg2f2mrGgd9s9U91WuKCb+38UkiHHK5gj5xuIITlL0rWvIz28P7gWwb0t+VrJp20w/3djoDmzOkOfc5s8Zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <a class="usa-skipnav" href="#main-content">Skip to main content</a>
  <section
    class="usa-banner"
    aria-label="Official website of the United States government"
  >
    <div class="usa-accordion">
      <header class="usa-banner__header">
        <div class="usa-banner__inner">
          <div class="grid-col-auto">
            <img
              aria-hidden="true"
              class="usa-banner__header-flag"
              src="/assets/img/us_flag_small.png"
              alt=""
            />
          </div>
          <div class="grid-col-fill tablet:grid-col-auto" aria-hidden="true">
            <p class="usa-banner__header-text">
              An official website of the United States government
            </p>
            <p class="usa-banner__header-action">Here’s how you know</p>
          </div>
          <button
            type="button"
            class="usa-accordion__button usa-banner__button"
            aria-expanded="false"
            aria-controls="gov-banner-default"
          >
            <span class="usa-banner__button-text">Here’s how you know</span>
          </button>
        </div>
      </header>
      <div
        class="usa-banner__content usa-accordion__content"
        id="gov-banner-default"
      >
        <div class="grid-row grid-gap-lg">
          <div class="usa-banner__guidance tablet:grid-col-6">
            <img
              class="usa-banner__icon usa-media-block__img"
              src="/assets/img/icon-dot-gov.svg"
              role="img"
              alt=""
              aria-hidden="true"
            />
            <div class="usa-media-block__body">
              <p>
                <strong>Official websites use .gov</strong><br />A
                <strong>.gov</strong> website belongs to an official government
                organization in the United States.
              </p>
            </div>
          </div>
          <div class="usa-banner__guidance tablet:grid-col-6">
            <img
              class="usa-banner__icon usa-media-block__img"
              src="/assets/img/icon-https.svg"
              role="img"
              alt=""
              aria-hidden="true"
            />
            <div class="usa-media-block__body">
              <p>
                <strong>Secure .gov websites use HTTPS</strong><br />A
                <strong>lock</strong> (
                <span class="icon-lock"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="52"
                    height="64"
                    viewBox="0 0 52 64"
                    class="usa-banner__lock-image"
                    role="img"
                    aria-labelledby="banner-lock-description"
                    focusable="false"
                  >
                    <title id="banner-lock-title">Lock</title>
                    <desc id="banner-lock-description">
                      Locked padlock icon
                    </desc>
                    <path
                      fill="#000000"
                      fill-rule="evenodd"
                      d="M26 0c10.493 0 19 8.507 19 19v9h3a4 4 0 0 1 4 4v28a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V32a4 4 0 0 1 4-4h3v-9C7 8.507 15.507 0 26 0zm0 8c-5.979 0-10.843 4.77-10.996 10.712L15 19v9h22v-9c0-6.075-4.925-11-11-11z"
                    />
                  </svg> </span
                >) or <strong>https://</strong> means you’ve safely connected to
                the .gov website. Share sensitive information only on official,
                secure websites.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="usa-overlay"></div>
  <header class="usa-header usa-header--basic">
    <div class="usa-nav-container">
      <div class="usa-navbar">
        <div class="usa-logo" id="-logo">
          <em class="usa-logo__text"
            ><a href="/" title="<Project title>">&lt;Project title&gt;</a></em
          >
        </div>
        <button type="button" class="usa-menu-btn">Menu</button>
      </div>
      <nav aria-label="Primary navigation," class="usa-nav">
        <button type="button" class="usa-nav__close">
          <img src="/assets/img/usa-icons/close.svg" role="img" alt="Close" />
        </button>
        <ul class="usa-nav__primary usa-accordion">
          <li class="usa-nav__primary-item">
            <button
              type="button"
              class="usa-accordion__button usa-nav__link usa-current"
              aria-expanded="false"
              aria-controls="basic-nav-section-one"
            >
              <span>&lt;Current section&gt;</span>
            </button>
            <ul id="basic-nav-section-one" class="usa-nav__submenu">
              <li class="usa-nav__submenu-item">
                <a href=""><span>&lt;Navigation link&gt;</span></a>
              </li>
              <li class="usa-nav__submenu-item">
                <a href=""><span>&lt;Navigation link&gt;</span></a>
              </li>
              <li class="usa-nav__submenu-item">
                <a href=""><span>&lt;Navigation link&gt;</span></a>
              </li>
              <li class="usa-nav__submenu-item">
                <a href=""><span>&lt;Navigation link&gt;</span></a>
              </li>
            </ul>
          </li>
          <li class="usa-nav__primary-item">
            <a href="" class="usa-nav-link"><span>&lt;Simple link&gt;</span></a>
          </li>
          <li class="usa-nav__primary-item">
            <a href="" class="usa-nav-link"><span>&lt;Simple link&gt;</span></a>
          </li>
        </ul>
        <section aria-label="Search component">
          <form class="usa-search usa-search--small" role="search">
            <label class="usa-sr-only" for="search-field">Search</label>
            <input id="query-mobile" class="usa-input usagov-search-autocomplete" 
              name="query" type="search" autocomplete="on">
            <button class="usa-button" type="submit">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Search_Icon.svg/240px-Search_Icon.svg.png"
                class="usa-search__submit-icon"
                alt="Search"
              />
            </button>
          </form>
        </section>
      </nav>
    </div>
  </header>
  <div class="usa-section">
    <div class="grid-container">
      <div class="grid-row grid-gap">
        <div class="usa-layout-docs__sidenav desktop:grid-col-3">
          <nav aria-label="Secondary navigation">
            <ul class="usa-sidenav">
              <li class="usa-sidenav__item"><a href="">Parent link</a></li>
              <li class="usa-sidenav__item">
                <a href="" class="usa-current">Current page</a>
                <ul class="usa-sidenav__sublist">
                  <li class="usa-sidenav__item"><a href="">Child link</a></li>
                  <li class="usa-sidenav__item">
                    <a href="" class="usa-current">Child link</a>
                    <ul class="usa-sidenav__sublist">
                      <li class="usa-sidenav__item">
                        <a href="">Grandchild link</a>
                      </li>
                      <li class="usa-sidenav__item">
                        <a href="">Grandchild link</a>
                      </li>
                      <li class="usa-sidenav__item">
                        <a href="" class="usa-current">Grandchild link</a>
                      </li>
                      <li class="usa-sidenav__item">
                        <a href="">Grandchild link</a>
                      </li>
                    </ul>
                  </li>
                  <li class="usa-sidenav__item"><a href="">Child link</a></li>
                  <li class="usa-sidenav__item"><a href="">Child link</a></li d>
                  <li class="usa-sidenav__item"><a href="">Child link</a></li>
                </ul>
              </li>
              <li class="usa-sidenav__item"><a href="">Parent link</a></li>
            </ul>
          </nav>
        </div>
        <main
          class="
            usa-layout-docs__main
            desktop:grid-col-9
            usa-prose usa-layout-docs
          "
          id="main-content"
        >
        

      <div class="grid-container text-center">
        <div class="grid-row">
              <div class="grid-col-1"></div>
            <div class="grid-col-10 text-center"><h1 id="section-heading-h2">Loran Conversion</h1></div>
              <div class="grid-col-1"></div>
          </div>
          <div class="grid-row">
              <div class="grid-col-1"></div>
            <div class="grid-col-10">Enter the Loran-C coordinates below to convert them to Latitude and Longitude.</div>
              <div class="grid-col-1"></div>
          </div>
          <br />
          <div class="grid-row">
          <div class="grid-col-auto">
            <select class="usa-select" name="options" id="options">
              <option value>- Select -</option>
              <option value="DMM">Dm.m</option>
              <option value="DD">D.d</option>
              <option value="DMS">DMS</option>
              </select>
            </div>
            <div class="grid-col-1"></div>
              <div class="grid-col-auto">
                <select class="usa-select" name="options" id="options">
                <option value>- Select -</option>
                <option value="DMM">Dm.m</option>
                <option value="DD">D.d</option>
                <option value="DMS">DMS</option>
                </select>
            </div>
          </div>
          <br /> 
          <div class="grid-row">
            <div class="grid-col-3">Beginning Loran ITD</div>
              <div class="grid-col-1"></div>
            <div class="grid-col-3">Ending Loran ITD</div>
              <div class="grid-col-1"></div>
              <div class="grid-col-3"></div>
              <div class="grid-col-auto"></div>
          </div>
          <div class="grid-row flex-align-end">
            <div class="grid-col-3"><input class="usa-input" id="beginLoran" name="input-type-text" /></div>
              <div class="grid-col-1"></div>
            <div class="grid-col-3"><input class="usa-input" id="endLoran" name="input-type-text" /></div>
              <div class="grid-col-1"></div>
            <div class="grid-col-auto"><button type="" class="usa-button" onclick="buttonShow()">Submit</button></div>
          </div>
          <br />
          <div id = "results" style="display:none">
            <div class="grid-row">
              <div class="grid-col-3">Beginning Loran ITD</div>
                <div class="grid-col-1"></div>
              <div class="grid-col-3">Ending Loran ITD</div>
                <div class="grid-col-1"></div>
                <div class="grid-col-3 text-center">Fishing Area</div>
            </div>
            <div class="grid-row flex-align-end">
              <div class="grid-col-3"><input class="usa-input" id="beginLoran" name="input-type-text" /></div>
                <div class="grid-col-1"></div>
              <div class="grid-col-3"><input class="usa-input" id="endLoran" name="input-type-text" /></div>
                <div class="grid-col-1"></div>
              <div class="grid-col-3"><input class="usa-input" id="statiscalfishingarea" name="input-type-text" /></div>
            </div>
          </div>   
        </div>
      </div>
    </main>
      </div>
    </div>
  </div>
  <footer class="usa-footer">
    <div class="grid-container usa-footer__return-to-top">
      <a href="#">Return to top</a>
    </div>
    <div class="usa-footer__primary-section">
      <nav class="usa-footer__nav" aria-label="Footer navigation">
        <ul class="grid-row grid-gap">
          <li
            class="
              mobile-lg:grid-col-4
              desktop:grid-col-auto
              usa-footer__primary-content
            "
          >
            <a class="usa-footer__primary-link" href="javascript:void(0);"
              >&lt;Primary link&gt;</a
            >
          </li>
          <li
            class="
              mobile-lg:grid-col-4
              desktop:grid-col-auto
              usa-footer__primary-content
            "
          >
            <a class="usa-footer__primary-link" href="javascript:void(0);"
              >&lt;Primary link&gt;</a
            >
          </li>
          <li
            class="
              mobile-lg:grid-col-4
              desktop:grid-col-auto
              usa-footer__primary-content
            "
          >
            <a class="usa-footer__primary-link" href="javascript:void(0);"
              >&lt;Primary link&gt;</a
            >
          </li>
          <li
            class="
              mobile-lg:grid-col-4
              desktop:grid-col-auto
              usa-footer__primary-content
            "
          >
            <a class="usa-footer__primary-link" href="javascript:void(0);"
              >&lt;Primary link&gt;</a
            >
          </li>
        </ul>
      </nav>
    </div>
    <div class="usa-footer__secondary-section">
      <div class="grid-container">
        <div class="grid-row grid-gap">
          <div
            class="
              usa-footer__logo
              grid-row
              mobile-lg:grid-col-6 mobile-lg:grid-gap-2
            "
          >
            <div class="mobile-lg:grid-col-auto">
              <img
                class="usa-footer__logo-img"
                src="/assets/img/logo-img.png"
                alt=""
              />
            </div>
            <div class="mobile-lg:grid-col-auto">
              <p class="usa-footer__logo-heading">&lt;Name of Agency&gt;</p>
            </div>
          </div>
          <div class="usa-footer__contact-links mobile-lg:grid-col-6">
            <div class="usa-footer__social-links grid-row grid-gap-1">
              <div class="grid-col-auto">
                <a class="usa-social-link" href="javascript:void(0);"
                  ><img
                    class="usa-social-link__icon"
                    src="https://upload.wikimedia.org/wikipedia/en/thumb/0/04/Facebook_f_logo_%282021%29.svg/240px-Facebook_f_logo_%282021%29.svg.png"
                    alt="Facebook"
                /></a>
              </div>
              <div class="grid-col-auto">
                <a class="usa-social-link" href="javascript:void(0);"
                  ><img
                    class="usa-social-link__icon"
                    src="https://upload.wikimedia.org/wikipedia/commons/3/39/Logo_of_Twitter%2C_Inc..svg"
                    alt="Twitter"
                /></a>
              </div>
              <div class="grid-col-auto">
                <a class="usa-social-link" href="javascript:void(0);"
                  ><img
                    class="usa-social-link__icon"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/YouTube_social_white_square_%282017%29.svg/1920px-YouTube_social_white_square_%282017%29.svg.png"
                    alt="YouTube"
                /></a>
              </div>
              <div class="grid-col-auto">
                <a class="usa-social-link" href="javascript:void(0);"
                  ><img
                    class="usa-social-link__icon"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/240px-Instagram_icon.png"
                    alt="Instagram"
                /></a>
              </div>
              <div class="grid-col-auto">
                <a class="usa-social-link" href="javascript:void(0);"
                  ><img
                    class="usa-social-link__icon"
                    src="https://wp-assets.rss.com/blog/wp-content/uploads/2019/10/10111557/social_style_3_rss-512-1.png"
                    alt="RSS"
                /></a>
              </div>
            </div>
            <p class="usa-footer__contact-heading">
              &lt;Agency Contact Center&gt;
            </p>
            <address class="usa-footer__address">
              <div class="usa-footer__contact-info grid-row grid-gap">
                <div class="grid-col-auto">
                  <a href="tel:1-800-555-5555">&lt;(800) 555-GOVT&gt;</a>
                </div>
                <div class="grid-col-auto">
                  <a href="mailto:info@agency.gov">&lt;info@agency.gov&gt;</a>
                </div>
              </div>
            </address>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="usa-identifier">
    <section
      class="usa-identifier__section usa-identifier__section--masthead"
      aria-label="Agency identifier"
    >
      <div class="usa-identifier__container">
        <div class="usa-identifier__logos">
          <a href="javascript:void(0)" class="usa-identifier__logo"
            ><img
              class="usa-identifier__logo-img"
              src="/assets/img/circle-gray-20.svg"
              alt="&lt;Parent agency&gt; logo"
              role="img"
          /></a>
        </div>
        <section
          class="usa-identifier__identity"
          aria-label="Agency description"
        >
          <p class="usa-identifier__identity-domain">domain.gov</p>
          <p class="usa-identifier__identity-disclaimer">
            An official website of the <a href="">&lt;Parent agency&gt;</a>
          </p>
        </section>
      </div>
    </section>
    <nav
      class="usa-identifier__section usa-identifier__section--required-links"
      aria-label="Important links"
    >
      <div class="usa-identifier__container">
        <ul class="usa-identifier__required-links-list">
          <li class="usa-identifier__required-links-item">
            <a
              href="javascript:void(0)"
              class="usa-identifier__required-link usa-link"
              >About &lt;Parent shortname&gt;</a
            >
          </li>
          <li class="usa-identifier__required-links-item">
            <a href="" class="usa-identifier__required-link usa-link"
              >Accessibility support</a
            >
          </li>
          <li class="usa-identifier__required-links-item">
            <a href="" class="usa-identifier__required-link usa-link"
              >FOIA requests</a
            >
          </li>
          <li class="usa-identifier__required-links-item">
            <a href="" class="usa-identifier__required-link usa-link"
              >No FEAR Act data</a
            >
          </li>
          <li class="usa-identifier__required-links-item">
            <a href="" class="usa-identifier__required-link usa-link"
              >Office of the Inspector General</a
            >
          </li>
          <li class="usa-identifier__required-links-item">
            <a href="" class="usa-identifier__required-link usa-link"
              >Performance reports</a
            >
          </li>
          <li class="usa-identifier__required-links-item">
            <a href="" class="usa-identifier__required-link usa-link"
              >Privacy policy</a
            >
          </li>
        </ul>
      </div>
    </nav>
    <section
      class="usa-identifier__section usa-identifier__section--usagov"
      aria-label="U.S. government information and services"
    >
      <div class="usa-identifier__container">
        <div class="usa-identifier__usagov-description">
          Looking for U.S. government information and services?
        </div>
        <a href="https://www.usa.gov/" class="usa-link">Visit USA.gov</a>
      </div>
    </section>
  </div>
</body>
</html>