<!-- <template>
  <div class="botman-chat-widget"></div>
</template>

<script setup>
import { onMounted, onBeforeUnmount } from 'vue';

onMounted(() => {
  const botmanWidget = document.createElement('script');
  botmanWidget.src = 'https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js';
  botmanWidget.setAttribute('id', 'botmanWidget');
  document.body.appendChild(botmanWidget);

  // Customize the botmanWidget object for your chat widget setup
  window.botmanWidget = {
    aboutText: 'Write Something',
    introMessage: "คุณต้องการทราบอะไร"
    // Add other configuration options here as needed
  };
});

onBeforeUnmount(() => {
  const botmanScript = document.getElementById('botmanWidget');
  if (botmanScript) {
    botmanScript.remove();
  }
});
</script>

<style>
/* Add your CSS styles here */
</style> -->
