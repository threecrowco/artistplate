<template>
  <div>
      <social-sharing :url="shareLink"
                      :title="shareTitle"
                      :description="shareText"
                      :quote="shareQuote"
                      :hashtags="shareHashtag"
                      twitter-user="canterburytunes"
                      inline-template >
          <div>
            <network class="ml-4" network="email">
              <i class="fa fa-envelope cursor-pointer hover:text-gray-600"></i>
            </network>
            <network class="ml-4" network="facebook">
              <i class="fab fa-facebook cursor-pointer hover:text-gray-600"></i>
            </network>
            <network class="ml-4" network="twitter">
              <i class="fab fa-twitter cursor-pointer hover:text-gray-600"></i>
            </network>
          </div>
      </social-sharing>
  </div>
</template>

<script>
export default {
    props: [
        'shareLink',
        'shareTitle',
        'shareText',
        'shareQuote',
        'shareHashtag',
    ],

}
</script>

<style>

</style>
