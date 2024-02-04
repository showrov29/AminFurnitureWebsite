<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
   <style>
    @import 'https://unpkg.com/open-props' layer(design.system);

    @import 'https://unpkg.com/open-props/normalize.dark.min.css'
        layer(base.normalize);
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200..900&family=Lobster&display=swap');

        @layer base.override-normalize {
        :root {
            font-family: 'Inter Variable', sans-serif;
            --surface-1: oklch(0 0 0);
            --text-1: oklch(0.97 0 0);
            --text-2: oklch(0.73 0 0);
            --link-visited: oklch(0.73 0 0);
        }

        a {
            color: var(--text-2);
            display: flex;
            gap: var(--size-1);
        }
        }

        @layer base.app {
        body {
            --max-inline: full;
            --gap: var(--size-fluid-4);
        }

        section {
            display: grid;
            justify-content: center;
            padding-inline: var(--size-1);
            gap: var(--size-9);
        }
        }

    

        @layer components.gallery {
        .imageGallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            max-inline-size: var(--max-inline);
            gap: calc(var(--border-size-2) * 2);

            & img {
            inline-size: 100%;
            block-size: 100%;
            object-fit: cover;
            aspect-ratio: var(--ratio-square);
            max-inline-size: 100%;
            background-image: var(--gradient-8);
            }

            & > button {
            position: relative;
            padding: 0;
            margin: 0;
            border: none;

            &::after {
                content: '';
                inset: 0;
                display: block;
                background-color: oklch(0 0 0 / 0.4);
                position: absolute;
                background-image: url(https://raw.githubusercontent.com/mobalti/open-props-interfaces/7d7d59bdb5dca71ec7280b88876b45d31cbf3c4a/image-gallery/images/pushpin-fill.svg);
                background-size: var(--size-5);
                background-repeat: no-repeat;
                background-position: top var(--size-1) right var(--size-1);
                opacity: 0;
                transition: 0.2s ease;
            }

            &:hover::after {
                opacity: 1;
            }
            }
        }
        }

        @layer components.dialog {
        .dialog {
            --sm-font-size: 0.875rem;
            --size: min(80dvh, 100%);
            --fade-duration: 1s;

            inline-size: var(--size);
            max-inline-size: 700px;
            border-radius: unset;
            .dialog-container {
            display: flex;
            flex-direction: column;
            gap: var(--size-3);
            position: relative;
            overflow: hidden;
            }

            .controls {
            position: fixed;
            z-index: var(--layer-1);
            inset-block-start: calc(50% - var(--size-5) / 2);
            inset-inline: var(--size-3);
            display: flex;
            justify-content: space-between;
            opacity: 0;
            animation: var(--animation-fade-in) var(--fade-duration) forwards;

            & button {
                inline-size: var(--size-8);
                border-radius: var(--radius-round);
                aspect-ratio: var(--ratio-square);
                font-size: 1.75rem;
                background: transparent;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 0;
                box-shadow: var(--shadow-1);
                color: var(--stone-1);
                transition: color 0.2s ease;
                @media (width > 600px) {
                font-size: 3rem;
                }

                &:hover {
                color: var(--stone-6);
                }
            }
            }

            .closeDialog {
            position: fixed;
            inset-block-start: var(--size-2);
            inset-inline-end: var(--size-2);
            block-size: 48px;
            inline-size: 48px;
            background-color: transparent;
            font-size: var(--font-size-5);
            padding: 0;
            }

            .carousel {
           
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: var(--size);
            inline-size: var(--size);
            block-size: var(--size);
        

            /* Hide scrollbar */
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
            &::-webkit-scrollbar {
                display: none;
            }

            & img {
                inline-size: 100%;
                block-size: 100%;
            }

            &::after {
                content: '';
                position: absolute;
                inset: 0;

                background-color: var(--surface-1);

                background-image: url(https://raw.githubusercontent.com/mobalti/open-props-interfaces/7d7d59bdb5dca71ec7280b88876b45d31cbf3c4a/image-gallery/images/bars-rotate-fade.svg);
                background-repeat: no-repeat;
                background-position: center;
                z-index: var(--layer-3);

                /* <Suspense> */
                animation: var(--animation-fade-out) var(--fade-duration) forwards,
                var(--fade-duration) op-hide 1s forwards;
            }
            }
        }
        }

        @layer animation.base {
        @keyframes op-hide {
            100% {
            visibility: hidden;
            }
        }
        }

        @layer animation.scroll-driven {
        body {
            timeline-scope: --carousel;
        }
        #carousel {
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            overscroll-behavior: contain;
            scroll-behavior: smooth;

            scroll-timeline: --carousel inline;

            > * {
            scroll-snap-align: center;
            }
        }

        #nextBtn {
            animation: auto next ease;
            animation-timeline: --carousel;

            /* fix bug scrollPort nextBtn visibility */
            animation-range: 0% 101%;
        }

        #prevBtn {
            animation: auto prev ease;
            animation-timeline: --carousel;
        }

        @keyframes prev {
            from {
            visibility: hidden;
            }
        }

        @keyframes next {
            99%,
            100% {
            visibility: hidden;
            }
        }
        }

       

   </style>
</head>
<body>
    <main>
      <section>
        <div class="imageGallery">
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-1.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-2.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-3.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-4.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-5.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-6.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-7.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-8.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-9.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-10.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-11.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
          <button>
            <picture>
              <img
                width="309"
                height="309"
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-12.webp"
                alt="A cute cat"
                loading="lazy"
              />
            </picture>
          </button>
        </div>

        <dialog class="dialog" id="dialog">
          <div class="dialogContainer">
            <div class="carousel" id="carousel">
              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-1.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>
              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-2.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>
              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-3.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>
              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-4.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>
              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-5.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>
              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-6.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>
              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-7.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>

              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-8.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>

              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-9.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>
              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-10.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>
              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-11.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>
              <picture>
                <img
                  width="309"
                  height="309"
                  src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/image-gallery/images/img-12.webp"
                  alt="A cute cat"
                  loading="lazy"
                />
              </picture>
            </div>
            <div class="controls">
              <button id="prevBtn" onclick="carousel.scrollBy(-100, 0)">
                <i class="ri-arrow-left-circle-fill"></i>
              </button>
              <button id="nextBtn" onclick="carousel.scrollBy(100, 0)">
                <i class="ri-arrow-right-circle-fill"></i>
              </button>
            </div>
          </div>
          <button id="closeDialogBtn" class="closeDialog">
            <i class="ri-close-line"></i>
          </button>
        </dialog>
      </section>
    </main>

   
<script>
        console.log('hello');
        const dialog = document.querySelector('#dialog');
        const images = document.querySelectorAll('.imageGallery button');
        const closeDialogBtn = document.querySelector('#closeDialogBtn');

        function openDialog(index) {
        if (!document.startViewTransition) {
            dialog.showModal();
            document.querySelectorAll('#carousel img')[index].scrollIntoView();
        } else handleTransition(index);
        }

        // Wait until the transition finished and the dialog opens before scrolling into view.
        async function handleTransition(index) {
        const transition = document.startViewTransition(() => dialog.showModal());
        try {
            await transition.finished;
        } finally {
            document.querySelectorAll('#carousel img')[index].scrollIntoView();
        }
        }

        const closeDialog = () => {
        if (!document.startViewTransition) dialog.close();
        else document.startViewTransition(() => dialog.close());
        };

        images.forEach((img, index) => {
        console.log(index);
        img.addEventListener('click', () => openDialog(index));
        });

        closeDialogBtn.addEventListener('click', () => closeDialog());
        
</script>
  

</body>
</html>