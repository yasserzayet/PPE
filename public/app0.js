new fullpage("#fullpage", {
  autoScrolling : true,
  navigation : true,
  onLeave: (origin,destination,direction) =>{
    const section = destination.item;
    console.log(destination.item);
    const title = section.querySelector('h1');
    const tl = new TimelineMax({delay : 0.5});
    tl.fromTo(title,0.5, {y:'50', opacity :0}, {y:0, opacity:1});
  }
});
