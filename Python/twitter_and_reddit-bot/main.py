import praw
from credentials import * # "credentials.py" contains your reddit and twitter API keys and passwords
import tweepy

# Prepared statement til at initiere reddit user agent:
my_reddit = praw.Reddit(
    client_id=reddit_client_id,
    client_secret=reddit_client_secret,
    user_agent=reddit_user_agent,
    username=username,
    password=password
)

# Opretter OAuthHandler-objektet
client = tweepy.Client(
    consumer_key=twitter_consumer_key,
    consumer_secret=twitter_consumer_secret,
    access_token=twitter_access_token,
    access_token_secret=twitter_access_token_secret
)

# subreddit der skal læses fra
sub_name = 'AskReddit'
max_posts = 1
i = 0

for submissions in my_reddit.subreddit(sub_name).hot(limit=max_posts):
    tweet = f"Reddit question of the day goes to u/{submissions.author}\n"
    tweet += f"𝗧𝗶𝘁𝗹𝗲: {submissions.title}\n"
    tweet += f"𝗨𝗽𝘃𝗼𝘁𝗲𝘀: {submissions.score}\n"
    tweet +=f"#QuestionOfTheDay #AskReddit\n"
    tweet += f"{submissions.url}"
    
    try:
        submissions.reply("Congratulations! Your post is won Question Of The Day! Check it out on twitter @QOTD_Reddit!")
        print(f"\nCommented on post: ",submissions.title,"\n")
        
    except:
        print(f"Could not create a comment\n")
    
    try:
        client.create_tweet(text=tweet)
        print(f"Tweet has been created\n")
    except:
        print(f"Tweet kunne ikke skabes.\n")
    
    # Output the tweet to console!
    print(tweet,"\n")

