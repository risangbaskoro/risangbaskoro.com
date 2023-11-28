import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(
    ScrollTrigger,
);

const homepageHeroScrollTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: '#hero',
        start: 'top top',
        end: 'bottom 70%',
        scrub: true,
        pin: true,
    }
});

homepageHeroScrollTimeline
    .fromTo('#hero-title', {
        opacity: 1,
        y: 0,
        ease: 'power1.out',
    }, {
        opacity: 0,
        y: -20,
        ease: 'power1.out',
    })
    .fromTo('#hero-content', {
        opacity: 1,
        y: 0,
        ease: 'power1.out',
    },{
        opacity: 0,
        y: -20,
        ease: 'power1.out',
    });