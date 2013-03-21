# How to use it? 

* Clone this repository somewhere on your project path. Root recommended. 
* In PhpStorm, go to Project Settings > Directories. From the rightmost pane, select the "vendor" directory (yes composer's vendor directory) and click "Exclude"

(NB: If you don't follow the second step, there are chances that PhpStorm will face conflicts with auto completion and might not provide the best results.)

# How does it work? 

The principal is rather simple - we have replicated the actual Laravel classes and methods to build fake ones. The classes and method signatures are the same. So when we ask PhpStorm to ignore the original classes, PhpStorm would then use our fake classes to provide code completion. 

# What's wrong with other helpers?

In my case, they don't work. Why? Probably because the latest PhpStorm doesn't like/accept/acknowledge the way the helpers feed code intel data via comments. 

# Why doesn't PhpStorm support Laravel auto completion without helpers? 

Because Laravel uses a lot of magic - most prominent is the heavy usages of "class_alias". PhpStorm is not yet intelligent enough to understand the sorcery hidden within the very core of Laravel :)

