import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(
    ScrollTrigger,
);

const homepageHeroAppearTimeline = gsap.timeline();

homepageHeroAppearTimeline
    .from('#hero-title', {
        opacity: 0,
        y: 100,
        ease: 'power1.out',
    })
    .from('#hero-content', {
        opacity: 0,
        y: 100,
        ease: 'power1.out',
    })
    .from('#hero-scroll-prompt', {
        opacity: 0,
    });