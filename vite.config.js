import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { VitePluginFonts } from 'vite-plugin-fonts' // 追加

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        // 以下を追加 ----------------
    VitePluginFonts({
        google: {
          families: [
            'M PLUS 2' // ここに導入したいフォント名を入れる
          ],
        }
      })
    ],
});
