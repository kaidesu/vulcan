# Vulcan
An experimental open source life embetterment AI.

## About
Oh man, where do I start?

First off. Take the term "AI," or "Artificial Intelligence" with a grain of salt here. While I categorize this project under the umbrella of artificial intelligence - it does not, in its current state, contain any forms of what one could deem as artificial intelligence.

I am merely an AI enthusiast. While I have no academics under my belt, I have always considered myself a keen self-learner. By day I work professionally as a backend developer building content management systems and other various tools for the web, while by night, I delve into papers, books, articles, and anything that has any bit of information on artificial intelligence and human-computer interactions. Thus - The Vulcan Project.

## Goals
My goals are simple for the initial release of Vulcan. But if I were to sum up my goal for this project, it's to essentially build a "friend." An agent, bot, or whatever you want to call it, that you can converse with and receive an intelligent reply, and in a way that you could forget that you're essentially speaking to a computer program running on a server somewhere.

### Phase I
Phase I will consist of the server and desktop applications built to support a basic human-computer interaction via chat (text and audio).

#### Intelligence Factor
The intelligence factor will be minimal, if not really non-existent. I'm currently experimenting and building out the PHP interpreter of the RiveScript chatbot scripting language. This is essentially a giant, glorified, switch or if/else statement where the user (you) must map out the messages that the bot can understand, and how it will reply.

##### Example
```
+ hello bot
- Hello user!
```

#### Server
The server is the heart of the project. The server will consist of an API, which will be responsible for allowing other "clients" (e.g. the desktop application) to interface with the agent. The system will be modular in nature, so that extendible features and datasets may be easily installed.

#### Desktop
The desktop client will be built on electron, using Vue.js. I work primarily on mac, so that will be my focus initially. The app will consist of a menubar chat interface with a configurable hot-key to quickly open the chat interface with the agent at anytime.

## FAQ
### Why use a web stack, nevertheless PHP and Laravel!?
I can picture many people asking this question. There's a few reasons, and they're all simple, but the number one and main reason is this:

1. It's the language and toolset I personally know best - I don't need to spend my time learning a programming language and instead focus on the algorithms and concepts behind natural language processing, neural networking, entity detection, etc. This is probably the **number one** reason behind all of this.

The rest are more subjective, and could apply to a vast majority of communities or programming language, but they are as follows:

2. PHP essentially powers the web. It's extremely common on servers, if not in fact a set standard for server to come installed with.
3. There is a vast community of PHP and Laravel developers that could contribute.
4. Spinning up a server is extremely cheap. Adding additional resources and computing power is just as cheap as well. You can have an extremely powerful server maintained for you where it's entire resources are dedicated to your artificial intelligent agent; always accessible and always online.

### Can I use this right now?
This is still in very early development - so it's not ready to really be installed and used on a day to day basis. There are many components missing, and more than likely, as I develop each piece, are relying on packages to be installed locally.
