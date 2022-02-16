
<?php $a='Abdulaziz - '?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <link rel='stylesheet' type='text/css' href='reset.css'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <link rel='icon' href="icon.ico" type="image/ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $a . 'Home'?></title>
</head>
<!---start--->
    <!--[if IE]>
        <script src='http://htmlshim.googlecode.com/svn/trunk/html5.js'></script>
    <![endif]-->
    <!--body-->
    <header><div class="nheader">
        <span class="close-button"><img src='menu.png' class='hj'/></span>
        <ul id="father">
            <li>Arabic Courses<ul class='son'>
                <a href='https://www.youtube.com/watch?v=nyz2sieUtsI&t=10s' target="new" ><li>Python</li></a>
                <a href='https://www.youtube.com/watch?v=c9559JVpFV4&t=5464s'><li>HTML & CSS</li></a>
                <a href='https://youtube.com/playlist?list=PLknwEmKsW8OsnUAj3ThlerzPeMKk9GXXR'><li>javascript</li></a>
                </ul></li>
            <li>English Courses<ul class='son'>
                <a href='https://www.youtube.com/watch?v=rfscVS0vtbw'><li>Python</li></a>
                <a href='https://www.youtube.com/watch?v=mU6anWqZJcc'><li>HTML & CSS</li></a>
                <a href='https://youtu.be/jS4aFq5-91M'><li>javascript</li></a>
                </ul></li>           
            <li>Follow Me
                <ul class='son'>
                    <a href='https://www.instagram.com/jkr_azzazz_/'><li>Instagram</li></a>
                    <a href='https://www.facebook.com/abdulaziz.sarsour.56/'><li>Facebook</li></a>
                    <a href='https://www.youtube.com/channel/UC-vTszcHX9VMaY3oXFuFsfQ'><li>Youtube</li></a>
                </ul>
            </li>   
            <li>About
                <p class='son'>By Abdulaziz<br><a href='tel:+962786936674'>+962786936674</a></p></li>
        </ul>
    </div></header>
    <body>
        <!--main-->
        <div class='body'>
        <div class='mainContent'>
            <section class='top-content'>
                <header>
                    <form action="index.php" method='POST'>
                    </form>
                    <h3><?php echo 'hi ' . $_POST['name'] . ' welcome to my website'?></h3>
                </header>
            <article>
                <!----><figure>
                    <img src='tiger.jpg' class='post-img'/>
                </figure>
                <h3>About Programming Languages</h3><br>
               <!-- <audio  class='audio' src='oldphone.mp3' controls>your browser doesn't support audio files </audio>-->
                    <details>
                        <summary>Python</summary>
                        <p class='ts'><mark>Python</mark> is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. Its language constructs as well as its object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.

                            <mark>Python</mark> is dynamically-typed and garbage-collected. It supports multiple programming paradigms, including structured (particularly, procedural), object-oriented and functional programming. It is often described as a "batteries included" language due to its comprehensive standard library.
                            
                            Guido van Rossum began working on <mark>Python</mark> in the late 1980s, as a successor to the ABC programming language, and first released it in 1991 as <mark>Python</mark> 0.9.0. <mark>Python</mark> 2.0 was released in 2000 and introduced new features, such as list comprehensions and a cycle-detecting garbage collection system (in addition to reference counting). <mark>Python</mark> 3.0 was released in 2008 and was a major revision of the language that is not completely backward-compatible. <mark>Python</mark> 2 was discontinued with version 2.7.18 in 2020.
                            
                            <mark>Python</mark> consistently ranks as one of the most popular programming languages.</p>
                    </details>
                    <br>
                    <details>
                        <summary>HTML</summary>
                        <p class='ts'><mark>The HyperText Markup Language</mark> , or <mark>HTML</mark> is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.

                            Web browsers receive <mark>HTML</mark> documents from a web server or from local storage and render the documents into multimedia web pages. <mark>HTML</mark> describes the structure of a web page semantically and originally included cues for the appearance of the document.
                            
                            <mark>HTML</mark> elements are the building blocks of <mark>HTML</mark> pages. With <mark>HTML</mark> constructs, images and other objects such as interactive forms may be embedded into the rendered page. <mark>HTML</mark> provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. <mark>HTML</mark> elements are delineated by tags, written using angle brackets. Tags such as img and input directly introduce content into the page. Other tags such as p surround and provide information about document text and may include other tags as sub-elements. Browsers do not display the <mark>HTML</mark> tags, but use them to interpret the content of the page.
                            
                            <mark>HTML</mark> can embed programs written in a scripting language such as JavaScript, which affects the behavior and content of web pages. Inclusion of CSS defines the look and layout of content. The World Wide Web Consortium (W3C), former maintainer of the <mark>HTML</mark> and current maintainer of the CSS standards, has encouraged the use of CSS over explicit presentational <mark>HTML</mark> since 1997. A form of <mark>HTML</mark>, known as <mark>HTML5</mark>, is used to display video and audio, primarily using the canvas element, in collaboration with javascript.</p>
                    </details>
                    <br>
                    <details>
                        <summary>CSS</summary>
                        <p class='ts'><mark>Cascading Style Sheets (CSS)</mark> is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. <mark>CSS</mark> is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.

                            <mark>CSS</mark> is designed to enable the separation of presentation and content, including layout, colors, and fonts. This separation can improve content accessibility; provide more flexibility and control in the specification of presentation characteristics; enable multiple web pages to share formatting by specifying the relevant <mark>CSS</mark> in a separate .css file, which reduces complexity and repetition in the structural content; and enable the .css file to be cached to improve the page load speed between the pages that share the file and its formatting.
                            
                            Separation of formatting and content also makes it feasible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, by voice (via speech-based browser or screen reader), and on Braille-based tactile devices. <mark>CSS</mark> also has rules for alternate formatting if the content is accessed on a mobile device.[4]
                            
                            The name cascading comes from the specified priority scheme to determine which style rule applies if more than one rule matches a particular element. This cascading priority scheme is predictable.
                            
                            The <mark>CSS</mark> specifications are maintained by the World Wide Web Consortium (W3C). Internet media type (MIME type) text/css is registered for use with <mark>CSS</mark> by RFC 2318 (March 1998). The W3C operates a free <mark>CSS</mark> validation service for <mark>CSS</mark> documents.
                            
                            In addition to HTML, other markup languages support the use of <mark>CSS</mark> including XHTML, plain XML, SVG, and XUL.</p>
                    </details><br>
                    <details>
                        <summary>JavaScript</summary>
                        <p class='ts'><mark>JavaScript</mark>,often abbreviated <mark>JS</mark>, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS.Over 97% of websites use <mark>JavaScript</mark> on the client side for web page behavior,often incorporating third-party libraries. All major web browsers have a dedicated <mark>JavaScript</mark> engine to execute the code on users' devices.

                             <mark>JavaScript</mark> is a high-level, often just-in-time compiled language that conforms to the ECMAScript standard.It has dynamic typing, prototype-based object-orientation, and first-class functions. It is multi-paradigm, supporting event-driven, functional, and imperative programming styles. It has application programming interfaces (APIs) for working with text, dates, regular expressions, standard data structures, and the Document Object Model (DOM).
                            
                            The ECMAScript standard does not include any input/output (I/O), such as networking, storage, or graphics facilities. In practice, the web browser or other runtime system provides <mark>JavaScript</mark> APIs for I/O.
                            
                            <mark>JavaScript</mark> engines were originally used only in web browsers, but are now core components of some servers and a variety of applications. The most popular runtime system for this usage is Node.js.
                            
                            Although Java and <mark>JavaScript</mark> are similar in name, syntax, and respective standard libraries, the two languages are distinct and differ greatly in design.</p>
                    </details>
                </p>
            </article>
            </section>
            <section class='top-content2'>
                <header>
                    <h3>some videos from my channels</h3>
                </header>
            <article>
                <p>Arduino Projects</p>
                <iframe width="100%"  src="https://www.youtube.com/embed/HtM0Z_NOkus" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br><br>
                <p>Raspberry Pi Projects</p>
                
                <iframe width="100%" src="https://www.youtube.com/embed/dHASh5iqzAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class='ts'>
                     if you watch the videos don't forget to subscribe,like and share 
                </p>
            </article>
            </section>
        </div>
        <!--  -------------------------------------------         -->
        <aside>
            <article class='theSidebar'>
                <h3>About Me</h3>
                <p class='ts'>
                    Abdulaziz Sarsour<br>
                   Front-end developer,<br>
                   languages I learnt:<br>
                   <br><span>python <progress class="wdth100" value='64' max="100"></progress></span> 
                   <br><span>HTML <progress class="wdth100" value='62' max="100"></progress></span> 
                   <br><span>CSS <progress class="wdth100" value='92' max="100"></progress></span> 
                   <br><span class="lll">JavaScript <progress  class="wdth100" value='84' max="100"></progress></span>

                </p>
            </article>
        </aside>
        <!--    -----------------------------------------  --------------------------------  -->
        <footer id='foooter'>
        <p>thank you for visiting my website</p>
        </footer>
        <script src="jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
    </div>
    </body>
</html>