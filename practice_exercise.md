Practice

Create a simple app using Symfony 6 (to familiarize with symfony concepts)

Step-by-step
Step 1:
Create a new minimalistic symfony project using Symfony binary. You may name your project whatever (choose name of your project based on your own personal choice).

Step 2:
Check system requirements. Is your system capable to run Symfony project? After you have seen this message: “Your system is ready to run Symfony projects”

Answer:

- symfony check:req

Browse the project directory structure in VS Code.

Step 3:
Start the Symfony project using symfony binary. Trivia: what if you do not have Symfony binary installed? Would you be able start the Symfony project without the Symfony binary?

Answer:

- php -S 127.0.0.1:8011 -t public/

Step 4:
Make sure your newly created project is up and running

Step 5:
Create your first page

- How do you create a page in Symfony?
- Which folder or directory should you use?
  Answer:
  - src -> Controller
- You can name your first page e.g., QuestionController.php
- Remember rules for creating a class (class name and file name must match)

Step 6:
Create a method inside QuestionController e.g., homepage. Inside a homepage method return a new Response(), add some text: ’What a bewitching controller we have conjured!’

```
#[Route('/', name: 'name')]
```

Step 7:
Create a route (make sure you are using annotation routes). Trivia: In older version of symfony, they do not have annotation in-built so you will have to install it through composer e.g., composer require annotations. No need in Symfony 6 to install annotations. If you are getting error: Have you imported correct Symfony Route?

Step 8:
Make sure your “homepage” is working correctly in root of the application e.g., /. Once this is working, how about creating another page.

Step 9: Create another controller method e.g., “show”. Inside a show method return a new Response, add some text: 'Future page to show a question’. This page must be accessible at endpoint e.g. /questions/how-to-tie-my-shoes-with-magic

Step 10: Make a questions/how-to-tie-my-shoes-with-magic route a bit smarter by making sure that when someone hits this URL: /questions/ANYTHING, it shows some result. Remember wildcard routes?

Step 11: Let's use sprintf(),to add a %s placeholder. Pass $slug for that placeholder. In other words, use sprintf to return a response object.

Step 12: Test with the URL to /questions/accidentally-turned-dog-into-furry-shoes and... check if the route works.

Step 13: Uppercase the first character of each word in a string. Hint: Try for example u or ucwords() Testing with the URL /questions/accidentally-turned-dog-into-furry-shoes should display: Accidentally Turned Dog Into Furry Shoes

```
u(str_replace('-', ' ', $slug))->title(true): null
```

Step 14: Find out how many routes your symfony app contains. Hint. Use bin/console to check router i.e. php bin/console debug:router. This is automatically added by symfony during development.

```
bin/console debug:router
```

Step 15: Do you have “template” folder inside your Symfony project. Hint: In symfony, you can add templates folder by using composer require template. Browse base.html.twig file. Let's make our show() controller render a twig template inside a question folder. Trivia: where would you create a question folder in your project?

Step 16: Create e.g. show.html.twig template inside a question folder. Let's start simple: an <h1> and then {{ question }} to render the question variable inside show.html.twig. Test if it works.

Step 17: Back in the controller, up in the show() controller, add some fake answers in an array of strings e.g. $answers = [‘answer1’, ‘answer2’, ‘answer3’] and render those answers in the twig template.

Step 18: Now, how can you show those answers from a twig template? We can’t say e.g. {{answers}} because it’s an array. So, loop over array and print each individual answer in a twig template.

Step 19: Can you use twig filter to print out the number of answers. Hint: twig has a lot of filters how about “length” filter

Step 20: How can you use base.html.twig template as your layout inside show.html.twig? Trivia: By the way, these blocks in base.html.twig aren't special: you can rename them, move them around, add more or remove some. The more blocks you add, the more flexibility your "child" templates have to put content into different spots.

Step 21: Add a title block in your show.html.twig template

Step 22: You're doing really well, but yikes! Our site is ugly. Time to fix that. Let us unzip practice_resources.zip folder and update our site with some CSS, images and assets.

- Overwrite the contents of base.html.twig and Check the base.html.twig.
- Copy /images and app.css and move those into /public folder
- Create /css directory inside public folder and move app.css there

Testing time! See how your site looks now.

Step 23: Make the show.html.twig page a bit pretty.

- Back in the practice_resource/ directory, open show.html.twig, and override contents from that file to your own show.html.twig
- Testing time! See how your site looks now.

Step 24: Your homepage still looks a bit blunt. Let us fix that. Replace that with return $this->render(). Let's call the template question/homepage.html.twig.

- Inside templates/question/, create the new file: homepage.html.twig
- You can use code from practice_resources/homepage.html.twig and override your newly created homepage.html.twig

Testing time! See how your site looks now. Did you get an error? Hint: composer require symfony/asset

Step 25: Go back to the "show" page for a question. Hit this url: https://127.0.0.1:8000/questions/ask-me-anything The logo on top is a link... that doesn't go anywhere yet. This should take us back to the homepage. How about debugging the routes available in your app, did you check step 14?

- Every route has an internal name, including the two routes that we made.
- Use explicit name, instead of relying on this auto-generated names

Step 26: Create a name inside home controller method and point {{ path() }} and pass it the route name.

Step 27: On the homepage, we have two hard-coded questions... and each has two links that currently go nowhere. Add path to link these questions.

Well done. You now have a very simple and basic static Symfony project!
