(function(window, document, $) {
    "use strict";
    var theDays = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
      theMovies = ["Night of the Living Dead", "Eden Lake", "Nightmare on Elm Street", "Nosferatu", "Scream", "Martyrs", "The Ring", "The Exorcist", "The Taking of Deborah Logan", "Candyman", "Dead Snow: Red vs Dead", "Grave Encounters", "Insidious 2", "At the Devil's Door", "Suspiria", "Friday the 13th", "Sleepaway Camp", "Event Horizon", "The Orphanage", "The Shining", "Housebound", "Rosemary's Baby", "[rec]", "The Texas Chainsaw Massacre", "Paranormal Activity 3", "The Conjuring", "Evil Dead", "The Descent", "Psycho", "Trick 'r Treat", "Halloween"],
      theMovieDetailsObj = {
        "Alien": {
          title: "Alien",
          background: "lib/img/bg/alien.jpg",
          cover: "lib/img/covers/alien.jpg",
          desc: "A commercial crew aboard the deep space towing vessel, Nostromo is on its way home when they pick an SOS warning from a distant planet. What they don't know is that the SOS warning is not like any other ordinary warning call. Picking up the signal, the crew realize that they are not alone on the spaceship when an alien stowaway is on the cargo ship.",
          year: "1979",
          imdb: "tt0078748",
          trailer: "jQ5lPt9edzQ"
        },
        "Psycho": {
          title: "Psycho",
          background: "lib/img/bg/psycho.jpg",
          cover: "lib/img/covers/psycho.jpg",
          desc: "On the run after stealing $40,000 from hr employer's client, a partly poor office worker gets lost and decides to stay at a motel for the night, regretting what she's done. But on her single night at the motel, she finds out it was a mistake to choose this motel; as its young depressed manager's mother is an unrelenting psycho.",
          year: "1960",
          imdb: "tt0054215",
          trailer: "NG3-GlvKPcg",
          bannerMain: "Throwback",
          bannerDay: "Thursday"
        },
        "The Shining": {
          title: "The Shining",
          background: "lib/img/bg/theshining.jpg",
          cover: "lib/img/covers/theshining.jpg",
          desc: "Signing a contract, Jack Torrance, a normal writer and former teacher agrees to take care of a hotel which has a long, violent past that puts everyone in the hotel in a nervous situation. While Jack slowly gets more violent and angry of his life, his son, Danny, tries to use a special talent, the \"Shining\", to inform the people outside about whatever that is going on in the hotel.",
          year: "1980",
          imdb: "tt0081505",
          trailer: "i-B_bbkEfS0"
        },
        "Nightmare on Elm Street": {
          title: "Nightmare on Elm Street",
          background: "lib/img/bg/nightmareonelmst.jpg",
          cover: "lib/img/covers/nightmareonelmst.jpg",
          desc: "On Elm Street, Nancy Thompson and a group of her friends including Tina Gray, Rod Lane and Glen Lantz are being tormented by a clawed killer in their dreams named Freddy Krueger. Nancy must think quickly, as Freddy tries to pick off his victims one by one. When he has you in your sleep, who is there to save you?",
          year: "1984",
          imdb: "tt0087800",
          trailer: "dCVh4lBfW-c",
          bannerMain: "Slasher",
          bannerDay: "Saturday"
        },
        "Halloween": {
          title: "Halloween",
          background: "lib/img/bg/halloween.jpg",
          cover: "lib/img/covers/halloween.jpg",
          desc: "Fifteen years ago, 6 year old Michael Myers brutally killed his older sister. The silent child was incarcerated in the Smith's Grove Sanitarium under the care of psychiatrist Sam Loomis. The town of Haddonfield had slowly began to forget the tragic crime, until Loomis returned to the town to warn of Myers escape from Smith's Grove. With Michael set on killing a group of high school students, Loomis seeks the help of the hesitant town sheriff to stop him before it's too late.",
          year: "1978",
          imdb: "tt0077651",
          trailer: "xHuOtLTQ_1I",
          bannerMain: "Slasher",
          bannerDay: "Saturday",
          halloween: "Happy Halloween"
        },
        "Friday the 13th": {
          title: "Friday the 13th",
          background: "lib/img/bg/fridaythe13.jpg",
          cover: "lib/img/covers/fridaythe13.jpg",
          desc: "One summer at Camp Crystal Lake, a group of young counselors begin to get ready to lead campers. Unfortunately for the former, someone isn't happy about what's going on in the camp and enjoys playing kill the counselor. As bodies fall to the ground in the camp, no one is safe.",
          year: "1980",
          imdb: "tt0080761",
          trailer: "Xqqej9T2gqI"
        },
        "Sleepaway Camp": {
          title: "Sleepaway Camp",
          background: "lib/img/bg/sleepawaycamp.jpg",
          cover: "lib/img/covers/sleepawaycamp.jpg",
          desc: "After a horrible boating accident kills her family, Angela, a shy and sullen young girl, moves in with her eccentric aunt Martha, alongside her protective cousin Ricky. One summer, Martha sends the kids to Camp Arawak. Soon after their arrival, a series of bizarre and increasingly violent accidents begins to claim the lives of various campers. Who is the twisted individual behind these murders? The disclosure of the murderer's identity is one of the most shocking climaxes in the history of American cinema.",
          year: "1983",
          imdb: "tt0086320",
          trailer: "yaAcitYY4OU",
          bannerMain: "Slasher",
          bannerDay: "Saturday"
        },
        "Zombeavers": {
          title: "Zombeavers",
          background: "lib/img/bg/zombeavers.jpg",
          cover: "lib/img/covers/zombeavers.jpg",
          desc: "ZOMBEAVERS is an action-packed horror/comedy in which a group of college kids staying at a riverside cabin are menaced by a swarm of deadly zombie beavers. A weekend of sex and debauchery soon turns gruesome as the beavers close in on the kids. Riding the line between scary, sexy and funny, the kids are soon fighting for their lives in a desperate attempt to fend off the hoard of beavers that attack them in and around their cabin.",
          year: "2014",
          imdb: "tt2784512",
          trailer: "7onFrBK_hKE"
        },
        "Housebound": {
          title: "Housebound",
          background: "lib/img/bg/housebound.jpg",
          cover: "lib/img/covers/housebound.jpg",
          desc: "Kylie Bucknell is forced to return to the house she grew up in when the court places her on home detention. However, when she too becomes privy to unsettling whispers & strange bumps in the night, she begins to wonder whether she's inherited her overactive imagination, or if the house is in fact possessed by a hostile spirit who's less than happy about the new living arrangement.",
          year: "2014",
          imdb: "tt3504048",
          trailer: "BT1KcYiPb4I"
        },
        "Scream": {
          title: "Scream",
          background: "lib/img/bg/scream.jpg",
          cover: "lib/img/covers/scream.jpg",
          desc: "One year after the death of Sidney Prescott's (Campbell) mother, two students turn up gutted. When a serial killer appears, Sidney begins to suspect whether her mother's death and the two new deaths are related. No one is safe, as the killer begins to pick everyone off one by one. Everyone's a suspect in this case.",
          year: "1996",
          imdb: "tt0117571",
          trailer: "23jmjs-rMGI"
        },
        "Dead Snow: Red vs Dead": {
          title: "Dead Snow: Red vs Dead",
          background: "lib/img/bg/deadsnow.jpg",
          cover: "lib/img/covers/deadsnow.jpg",
          desc: "If the worst day of your life consisted of accidentally killing your girlfriend with an axe, chain-sawing your own arm off, and watching in horror as your closest friends were devoured by a zombified Nazi battalion, you'd have to assume that things couldn't get much worse. In Martin's case, that was only the beginning.",
          year: "2014",
          imdb: "tt2832470",
          trailer: "glIoXwTcG60",
          double: "Zombeavers",
          bannerMain: "Silly Zombie",
          bannerDay: "Sunday"
        },
        "The Cabinet of Dr. Caligari": {
          title: "The Cabinet of Dr. Caligari",
          background: "lib/img/bg/caligari.jpg",
          cover: "lib/img/covers/caligari.jpg",
          desc: "At a fair in the village of Hostenwall, Dr. Caligari obtains a permit to set up his tent show featuring Cesare the 23 year-old Somnabulist who has slept for 23 years. Francis and his friend Alan visit the popular show and Alan asks Cesare in his trance-like state to tell him his future. Cesare predicts that he will die that night and when Alan is in fact found dead in the morning it seems to be just one of many such crimes recently.",
          year: "1920",
          imdb: "tt0010323",
          trailer: "IAtpxqajFak",
          bannerMain: "Throwback",
          bannerDay: "Thursday"
        },
        "The Exorcist": {
          title: "The Exorcist",
          background: "lib/img/bg/theexorcist.jpg",
          cover: "lib/img/covers/theexorcist.jpg",
          desc: "A visiting actress in Washington, D.C., notices dramatic and dangerous changes in the behavior and physical make-up of her 12-year-old daughter. Meanwhile, a young priest at nearby Georgetown University begins to doubt his faith while dealing with his mother's terminal sickness. And, book-ending the story, a frail, elderly priest recognizes the necessity for a show-down with an old demonic enemy.",
          year: "1973",
          imdb: "tt0070047",
          trailer: "YDGw1MTEe9k",
          bannerMain: "Throwback",
          bannerDay: "Thursday"
        },
        "The Descent": {
          title: "The Descent",
          background: "lib/img/bg/thedescent.jpg",
          cover: "lib/img/covers/thedescent.jpg",
          desc: "A woman goes on vacation with her friends after her husband and daughter encounter a tragic accident. One year later she goes hiking with her friends and they get trapped in the cave. With a lack of supply, they struggle to survive and they meet strange blood thirsty creatures.",
          year: "2005",
          imdb: "tt0435625",
          trailer: "ptSdzdUhzKg"
        },
        "Martyrs": {
          title: "Martyrs",
          background: "lib/img/bg/martyrs.jpg",
          cover: "lib/img/covers/martyrs.jpg",
          desc: "A young woman's quest for revenge against the people who kidnapped and tormented her as a child leads her and a friend, who is also a victim of child abuse, on a terrifying journey into a living hell of depravity.",
          year: "2008",
          imdb: "tt1029234",
          trailer: "-7Qx2dT-lUw",
          notes: "English Subtitles"
        },
        "Grave Encounters": {
          title: "Grave Encounters",
          background: "lib/img/bg/graveencounters.jpg",
          cover: "lib/img/covers/graveencounters.jpg",
          desc: "For their ghost hunting reality show, a production crew locks themselves inside an abandoned mental hospital that's supposedly haunted - and it might prove to be all too true.",
          year: "2011",
          imdb: "tt1703199",
          trailer: "HEmuFgHZZK0"
        },
        "Evil Dead": {
          title: "Evil Dead",
          background: "lib/img/bg/evildead.jpg",
          cover: "lib/img/covers/evildead.jpg",
          desc: "Five twenty-something friends become holed up in a remote cabin. When they discover a Book of the Dead, they unwittingly summon up dormant demons living in the nearby woods, which possess the youngsters in succession until only one is left intact to fight for survival.",
          year: "2013",
          imdb: "tt1288558",
          trailer: "FKFDkpHCQz4"
        },
        "Paranormal Activity 3": {
          title: "Paranormal Activity 3",
          background: "lib/img/bg/paranormalactivity.jpg",
          cover: "lib/img/covers/paranormalactivity.jpg",
          desc: "Dennis moves to the house of his girlfriend Julie to raise a family with her daughters Katie and Kristi. Little Kristi has an imaginary friend named Toby while weird things happen in the house. Dennis places cameras in the house to capture images during the night and soon he finds that there is an entity in the house.",
          year: "2011",
          imdb: "tt1778304",
          trailer: "twHFeqqFc30",
          double: "Poltergeist",
          bannerMain: "Supernatural",
          bannerDay: "Sunday"
        },
        "The Conjuring": {
          title: "The Conjuring",
          background: "lib/img/bg/theconjuring.jpg",
          cover: "lib/img/covers/theconjuring.jpg",
          desc: "Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.",
          year: "2013",
          imdb: "tt1457767",
          trailer: "k10ETZ41q5o"
        },
        "Insidious 2": {
          title: "Insidious: Chapter 2",
          background: "lib/img/bg/insidious.jpg",
          cover: "lib/img/covers/insidious.jpg",
          desc: "Renai is interrogated by a police detective about the supernatural events in the house. While the police investigate the house, the Lambert family temporarily moves to the old house of Lorraine Lambert. Renai is haunted by a woman in white and Josh has a strange behavior at home. Meanwhile Lorraine seeks out Elise's partners Specs and Tucker expecting to find answers.",
          year: "2013",
          imdb: "tt2226417",
          trailer: "S-xlB6kzPuU"
        },
        "[rec]": {
          title: "[rec]",
          background: "lib/img/bg/rec.jpg",
          cover: "lib/img/covers/rec.jpg",
          desc: "\"REC\" turns on a young TV reporter and her cameraman who cover the night shift at the local fire station. Receiving a call from an old lady trapped in her house, they reach her building to hear horrifying screams -- which begin a long nightmare and a uniquely dramatic TV report.",
          year: "2007",
          imdb: "tt1038988",
          trailer: "dgJ4xeDUhMk",
          notes: "English Subtitles",
          bannerMain: "Found Footage",
          bannerDay: "Friday"
        },
        "Suspiria": {
          title: "Suspiria",
          background: "lib/img/bg/suspiria.jpg",
          cover: "lib/img/covers/suspiria.jpg",
          desc: "A newcomer to a fancy ballet academy gradually comes to realize that the school is a front for something far more sinister and supernatural amidst a series of grisly murders.",
          year: "1977",
          imdb: "tt0076786",
          trailer: "MecSlkWMHPY",
          notes: "English Dubbed",
          bannerMain: "Throwback",
          bannerDay: "Thursday"
        },
        "The Texas Chainsaw Massacre": {
          title: "The Texas Chainsaw Massacre",
          background: "lib/img/bg/texas.jpg",
          cover: "lib/img/covers/texas.jpg",
          desc: "Five friends visiting their grandfather's house in the country are hunted and terrorized by a chain-saw wielding killer and his family of grave-robbing cannibals.",
          year: "1974",
          imdb: "tt0072271",
          trailer: "Vs3981DoINw",
          bannerMain: "Slasher",
          bannerDay: "Saturday"
        },
        "Nosferatu": {
          title: "Nosferatu",
          background: "lib/img/bg/nosferatu.jpg",
          cover: "lib/img/covers/nosferatu.jpg",
          desc: "Vampire Count Orlok expresses interest in a new residence and real estate agent Hutter's wife. Silent classic based on the story \"Dracula.\"",
          year: "1922",
          imdb: "tt0013442",
          trailer: "N-DrKgjit4I",
          bannerMain: "Silent Movie",
          bannerDay: "Sunday",
          double: "The Cabinet of Dr. Caligari"
        },
        "Eden Lake": {
          title: "Eden Lake",
          background: "lib/img/bg/edenlake.jpg",
          cover: "lib/img/covers/edenlake.jpg",
          desc: "Refusing to let anything spoil their romantic weekend break, a young couple confront a gang of loutish youths with terrifyingly brutal consequences.",
          year: "2008",
          imdb: "tt1020530",
          trailer: "_9kuMFPW0YI"
        },
        "The Taking of Deborah Logan": {
          title: "The Taking of Deborah Logan",
          background: "lib/img/bg/logan.jpg",
          cover: "lib/img/covers/logan.jpg",
          desc: "What began as a touching documentary about how Deborah Logan began to develop Alzheimer's disease and her daughter fights for her, as a result turned into a nightmare. No one suspected that the disease Deborah hiding behind is a far greater evil...",
          year: "2014",
          imdb: "tt3387648",
          trailer: "JiODgrdAJvo",
          bannerMain: "Found Footage",
          bannerDay: "Friday"
        },
        "The Ring": {
          title: "The Ring",
          background: "lib/img/bg/thering.jpg",
          cover: "lib/img/covers/thering.jpg",
          desc: "Rachel Keller is a journalist investigating a videotape that may have killed four teenagers. There is an urban legend about this tape: the viewer will die seven days after watching it. If the legend is correct, Rachel will have to run against time to save her son's and her own life.",
          year: "2002",
          imdb: "tt0298130",
          trailer: "ymPUAsPsTwg"
        },
        "Candyman": {
          title: "Candyman",
          background: "lib/img/bg/candyman.jpg",
          cover: "lib/img/covers/candyman.jpg",
          desc: "The Candyman, a murderous soul with a hook for a hand, is accidentally summoned to reality by a skeptic grad student researching the monster's myth.",
          year: "1992",
          imdb: "tt0103919",
          trailer: "LOnN4M9wB0s",
          bannerMain: "Slasher",
          bannerDay: "Saturday"
        },
        "Trick 'r Treat": {
          title: "Trick 'r Treat",
          background: "lib/img/bg/trickrtreat.jpg",
          cover: "lib/img/covers/trickrtreat.jpg",
          desc: "Five interwoven stories that occur on the same block, on the same night. A couple finds what happens when they blow a jack o' lantern out before midnight, a high school principal has a secret life as a serial killer, a college virgin might have met the right guy for her, a group of mean teens play a prank that they take too far, and a hermit is visited by a special trick or treater.",
          year: "2007",
          imdb: "tt0862856",
          trailer: "vMoiNyyXSwU"
        },
        "The Orphanage": {
          title: "The Orphanage",
          background: "lib/img/bg/theorphanage.jpg",
          cover: "lib/img/covers/theorphanage.jpg",
          desc: "A woman brings her family back to her childhood home, which used to be an orphanage for handicapped children. Before long, her son starts to communicate with an invisible new friend.",
          year: "2007",
          imdb: "tt0464141",
          trailer: "nUZQgqxIZ6s",
          notes: "English Subtitles"
        },
        "Night of the Living Dead": {
          title: "Night of the Living Dead",
          background: "lib/img/bg/nightofthelivingdead.jpg",
          cover: "lib/img/covers/nightofthelivingdead.jpg",
          desc: "The dead come back to life and eat the living in this low budget, black and white film. Several people barricade themselves inside a rural house in an attempt to survive the night. Outside are hordes of relentless, shambling zombies who can only be killed by a blow to the head.",
          year: "1968",
          imdb: "tt0063350",
          trailer: "0TAGtIQvebs",
          bannerMain: "Throwback",
          bannerDay: "Thursday"
        },
        "Rosemary's Baby": {
          title: "Rosemary's Baby",
          background: "lib/img/bg/rosemary.jpg",
          cover: "lib/img/covers/rosemary.jpg",
          desc: "A young couple move into a new apartment, only to be surrounded by peculiar neighbors and occurrences. When the wife becomes mysteriously pregnant, paranoia over the safety of her unborn child begins controlling her life.",
          year: "1968",
          imdb: "tt0063522",
          trailer: "PewtQsgN5uo",
          bannerMain: "Throwback",
          bannerDay: "Thursday"
        },
        "Event Horizon": {
          title: "Event Horizon",
          background: "lib/img/bg/eventhorizon.jpg",
          cover: "lib/img/covers/eventhorizon.jpg",
          desc: "It is the year 2047. Seven years have passed since the mysterious disappearance of Event Horizon, a spaceship that was sent to explore the outer limits of our solar system. Now, it is the time for a rescue mission that will find the ship and bring back the survivors; if any...",
          year: "1997",
          imdb: "tt0119081",
          trailer: "OVlnER8SxfQ",
          double: "Alien",
          bannerMain: "Space Station",
          bannerDay: "Sunday"
        },
        "At the Devil's Door": {
          title: "At the Devil's Door",
          background: "lib/img/bg/devilsdoor.jpg",
          cover: "lib/img/covers/devilsdoor.jpg",
          desc: "When ambitious young real estate agent Leigh is asked to sell a house with a checkered past, she crosses paths with a disturbed girl whom she believes is the runaway daughter of the couple selling the property. When Leigh tries to intervene and help her, she becomes entangled with a supernatural force that soon pulls Leigh's artist sister Vera into its web - and has sinister plans for both of them.",
          year: "2014",
          imdb: "tt2597242",
          trailer: "qaHR845sZtI"
        },
        "Poltergeist": {
          title: "Poltergeist",
          background: "lib/img/bg/poltergeist.jpg",
          cover: "lib/img/covers/poltergeist.jpg",
          desc: "A young family are visited by ghosts in their home. At first the ghosts appear friendly, moving objects around the house to the amusement of everyone, then they turn nasty and start to terrorise the family before they \"kidnap\" the youngest daughter.",
          year: "1982",
          imdb: "tt0084516",
          trailer: "9eZgEKjYJqA"
        }
      };
  
    var theDate, theDayNum, theDayName,
      theMoviesLength = theMovies.length,
      theImages = [];
  
    var THEAPP = {
        init: function() {
          DATE.get();
          NAVIGATE.ARROWS.checkForShowHide();
          DETAILS.buildTemplate(DETAILS.getMovieDetails());
          DETAILS.changeDate();
          DETAILS.updateBackground(DETAILS.getMovieDetails());
          BIND.element(".trailer-link", "click", function() {
            TRAILER.open($(this).attr("ref"));
          });
          BIND.element(".arrow.right", "click", function() {
            NAVIGATE.changeMovie();
          });
          BIND.element(".arrow.left", "click", function() {
            NAVIGATE.changeMovie("prev");
          });
          BIND.element(".title h1.inactive", "click", function() {
            DETAILS.switchDoubleMovie(this);
          });
          this.preloadImages();
        },
  
        preloadImages: function() {
          var i = 0;
          for (var key in theMovieDetailsObj) {
            theImages[i] = new Image();
            theImages[i].src = "https://www.danyuschick.com/codepen/horror-calendar/" + theMovieDetailsObj[key].background;
            i++
          }
        }
      },
  
      BUILD = {
        template: function(theTemplateObj) {
          var theSource, theTemplate, theHTML,
            theTemplateID = theTemplateObj.template,
            theTarget = theTemplateObj.target,
            thePlacement = theTemplateObj.placement,
            theValues = theTemplateObj.values || null;
  
          theSource = $("#" + theTemplateID).html();
          theTemplate = Handlebars.compile(theSource);
          theHTML = theTemplate(theValues);
          if (thePlacement == "append") {
            $(theTarget).append(theHTML);
          } else {
            $(theTarget).prepend(theHTML);
          }
        }
      },
  
      BIND = {
        element: function(theElement, theEvent, theFunctions) {
          $("body").on(theEvent, theElement, function() {
            theFunctions.apply(this, arguments);
          });
        },
  
        unbind: function(theElement, theEvent) {
          $("body").off(theEvent, theElement);
        }
      },
  
      FADE = { 
        in : function(theElement, theDuration, theCallback) {
          theDuration = theDuration || 1000;
          theCallback = theCallback || null;
  
          $(theElement).fadeIn(theDuration, function() {
            if (theCallback) {
              theCallback.apply(this, arguments);
            }
          });
        },
  
        out: function(theElement, theDuration, theCallback) {
          theDuration = theDuration || 1000;
          theCallback = theCallback || null;
  
          $(theElement).fadeOut(theDuration, function() {
            if (theCallback) {
              theCallback.apply(this, arguments);
            }
          });
        }
      },
  
      DATE = {
        get: function() {
          // For Testing Only - Remove Later -- Bring back after October to reset to 01/10.
          theDate = 1;
          theDayNum = 3;
          theDayName = theDays[theDayNum];
  
          /*theDate = moment().date();
          theDayNum = moment().day()-1;
          theDayName = theDays[moment().day()-1];*/
  
          this.setDay();
        },
  
        setDay: function(theDirection) {
          var theDayEl = $(".the-day");
          switch (theDirection) {
            case "prev":
              if (theDayNum == 0) {
                theDayNum = theDays.length;
              }
              theDayEl.html(theDays[theDayNum - 1]);
              theDayNum = theDayNum - 1;
              break;
            case "next":
              if (theDayNum == theDays.length - 1) {
                theDayNum = -1;
              }
              theDayEl.html(theDays[theDayNum + 1]);
              theDayNum = theDayNum + 1;
              break;
            default:
              theDayEl.html(theDayName);
              break;
          }
        }
      },
  
      DETAILS = {
        TOGGLECLASS: {
          trailer: function() {
            var theContent = $(".content");
  
            if (theContent.hasClass("hidden")) {
              theContent.css({
                opacity: 1,
                bottom: 20
              }).removeClass("hidden");
            } else {
              var theHeight = theContent.height() - 20;
              theContent.css({
                opacity: .5,
                bottom: -theHeight
              }).addClass("hidden");
            }
          }
        },
  
        switchDoubleMovie: function(el) {
          DETAILS.updateBackground(null, $(el).attr("ref"));
          $(".title h1").toggleClass("inactive active");
          $(".movie-details, .cover").toggleClass("active");
        },
  
        getMovieDetails: function() {
          var theMovie = theMovies[theDate - 1];
          return theMovieDetailsObj[theMovie];
        },
  
        buildTemplate: function(theDetails) {
          var theValues = {
            title: theDetails.title,
            cover: theDetails.cover,
            desc: theDetails.desc,
            year: theDetails.year,
            imdb: theDetails.imdb,
            trailer: theDetails.trailer,
            notes: theDetails.notes || null,
            bannerMain: theDetails.bannerMain || null,
            bannerDay: theDetails.bannerDay || null,
            double: theDetails.double || null,
            halloween: theDetails.halloween || null
          };
  
          if (theValues.double) {
            var theDouble = theMovieDetailsObj[theValues.double];
            theValues.secondMovie = {
              title: theDouble.title,
              cover: theDouble.cover,
              desc: theDouble.desc,
              year: theDouble.year,
              imdb: theDouble.imdb,
              trailer: theDouble.trailer,
              notes: theDouble.notes || null
            };
          }
  
          var theTemplateObj = {
            template: "movie-details",
            target: ".content",
            placement: "append",
            values: theValues
          };
          BUILD.template(theTemplateObj);
  
          theValues.bannerMain ? this.showBanner([theValues.bannerMain, theValues.bannerDay, theValues.double, theValues.halloween]) : null;
          FADE.in(".details", 250);
        },
  
        updateBackground: function(theDetails, theRef) {
          var theRef = theRef || null,
            theBackground = theRef ? theMovieDetailsObj[theRef].background : theDetails.background;
  
          $(".background").css({
            "background": "url(https://danyuschick.com/codepen/horror-calendar/" + theBackground + ") no-repeat #000",
            "backgroundSize": "cover",
            "backgroundPosition": "center"
          });
  
          FADE.in(".background", 250);
        },
  
        showBanner: function(theText) {
          var theTemplateObj = {
            template: "banner",
            target: ".details",
            placement: "prepend",
            values: {
              text: theText[0],
              day: theText[1],
              double: theText[2],
              halloween: theText[3]
            }
          };
          BUILD.template(theTemplateObj);
  
          FADE.in(".banner", 1000);
        },
  
        changeDate: function() {
          var theTextDate = theDate < 10 ? "0" + theDate : theDate;
          $(".the-date").text(theTextDate);
        }
      },
  
      NAVIGATE = {
        ARROWS: {
          checkForShowHide: function() {
            var theLeftArrow = $(".arrow.left"),
              theRightArrow = $(".arrow.right");
  
            if (theDate == 1) {
              theLeftArrow.removeClass("active");
              theRightArrow.addClass("active");
            } else if (theDate == theMoviesLength) {
              theLeftArrow.addClass("active");
              theRightArrow.removeClass("active");
            } else {
              $(".arrow").not("active").addClass("active");
            }
          }
        },
  
        updateDateAndDay: function(theDirection) {
          switch (theDirection) {
            case "prev":
              theDate = theDate > 1 ? theDate - 1 : theDate;
              DATE.setDay("prev");
              break;
            default:
              theDate = theDate < theMoviesLength ? theDate + 1 : theDate;
              DATE.setDay("next");
              break;
          }
          DETAILS.changeDate();
        },
  
        changeMovie: function(theDirection) {
          this.updateDateAndDay(theDirection);
  
          if (theDate !== 1 || theDate !== theMoviesLength) {
            this.ARROWS.checkForShowHide();
            FADE.out(".background", 250, function() {
              DETAILS.updateBackground(DETAILS.getMovieDetails());
            });
            FADE.out(".details", 250, function() {
              $(this).remove();
              DETAILS.getMovieDetails();
              DETAILS.buildTemplate(DETAILS.getMovieDetails());
            });
          }
        },
  
        hide: function() {
          $(".arrow.active").removeClass("active");
        }
      },
  
      TRAILER = {
        BUTTON: {
          show: function() {
            var theTemplateObj = {
              template: "close-button",
              target: ".details",
              placement: "prepend"
            };
            BUILD.template(theTemplateObj);
  
            FADE.in(".close", 1000, function() {
              BIND.element(".close", "click", function() {
                TRAILER.close();
              });
            });
          },
  
          hide: function() {
            FADE.out(".close", 500, function() {
              BIND.unbind(".close", "click");
              $(this).remove();
            });
          }
        },
  
        open: function(theRef) {
          DETAILS.TOGGLECLASS.trailer();
          NAVIGATE.hide();
          this.BUTTON.show();
  
          var theValues = {
              trailer: theMovieDetailsObj[theRef].trailer
            },
            theTemplateObj = {
              template: "trailer",
              target: ".container",
              placement: "prepend",
              values: theValues
            };
  
          BUILD.template(theTemplateObj);
          FADE.in("iframe");
        },
  
        close: function() {
          var theCallback = function() {
            DETAILS.TOGGLECLASS.trailer();
            $(this).remove();
          };
  
          FADE.out("iframe", 500, theCallback);
          this.BUTTON.hide();
          NAVIGATE.ARROWS.checkForShowHide();
        }
      };
  
    $(document).ready(function() {
      THEAPP.init();
    });
  
  }(this, this.document, this.jQuery));