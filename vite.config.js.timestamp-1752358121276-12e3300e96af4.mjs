// vite.config.js
import { defineConfig } from "file:///C:/xampp/htdocs/Veterinaria/Veterinaria/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/xampp/htdocs/Veterinaria/Veterinaria/node_modules/laravel-vite-plugin/dist/index.js";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/css/app2.css",
        "resources/js/app.js"
      ],
      refresh: true
    })
  ],
  server: {
    host: "0.0.0.0",
    port: 5173,
    strictPort: true,
    origin: "https://ce06382b4402.ngrok-free.app",
    // URL de ngrok con https
    hmr: {
      host: "ce06382b4402.ngrok-free.app",
      // SIN https://
      protocol: "wss"
      // no pongas 'port' o pon 5173 si no funciona sin él
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFx4YW1wcFxcXFxodGRvY3NcXFxcVmV0ZXJpbmFyaWFcXFxcdmV0ZXJpbmFyaWFcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIkM6XFxcXHhhbXBwXFxcXGh0ZG9jc1xcXFxWZXRlcmluYXJpYVxcXFx2ZXRlcmluYXJpYVxcXFx2aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vQzoveGFtcHAvaHRkb2NzL1ZldGVyaW5hcmlhL3ZldGVyaW5hcmlhL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuaW5wdXQ6IFtcbiAgJ3Jlc291cmNlcy9jc3MvYXBwLmNzcycsXG4gICdyZXNvdXJjZXMvY3NzL2FwcDIuY3NzJyxcbiAgJ3Jlc291cmNlcy9qcy9hcHAuanMnXG5dLFxuXG4gICAgICAgICAgICByZWZyZXNoOiB0cnVlLFxuICAgICAgICB9KSxcbiAgICBdLFxuXG4gICAgc2VydmVyOiB7XG4gICAgaG9zdDogJzAuMC4wLjAnLFxuICAgIHBvcnQ6IDUxNzMsXG4gICAgc3RyaWN0UG9ydDogdHJ1ZSxcbiAgICBvcmlnaW46ICdodHRwczovL2NlMDYzODJiNDQwMi5uZ3Jvay1mcmVlLmFwcCcsIC8vIFVSTCBkZSBuZ3JvayBjb24gaHR0cHNcbiAgICBobXI6IHtcbiAgICAgICAgaG9zdDogJ2NlMDYzODJiNDQwMi5uZ3Jvay1mcmVlLmFwcCcsICAvLyBTSU4gaHR0cHM6Ly9cbiAgICAgICAgcHJvdG9jb2w6ICd3c3MnLFxuICAgICAgICAvLyBubyBwb25nYXMgJ3BvcnQnIG8gcG9uIDUxNzMgc2kgbm8gZnVuY2lvbmEgc2luIFx1MDBFOWxcbiAgICB9LFxufSxcbn0pO1xuXG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQWlULFNBQVMsb0JBQW9CO0FBQzlVLE9BQU8sYUFBYTtBQUVwQixJQUFPLHNCQUFRLGFBQWE7QUFBQSxFQUN4QixTQUFTO0FBQUEsSUFDTCxRQUFRO0FBQUEsTUFDaEIsT0FBTztBQUFBLFFBQ0w7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLE1BQ0Y7QUFBQSxNQUVZLFNBQVM7QUFBQSxJQUNiLENBQUM7QUFBQSxFQUNMO0FBQUEsRUFFQSxRQUFRO0FBQUEsSUFDUixNQUFNO0FBQUEsSUFDTixNQUFNO0FBQUEsSUFDTixZQUFZO0FBQUEsSUFDWixRQUFRO0FBQUE7QUFBQSxJQUNSLEtBQUs7QUFBQSxNQUNELE1BQU07QUFBQTtBQUFBLE1BQ04sVUFBVTtBQUFBO0FBQUEsSUFFZDtBQUFBLEVBQ0o7QUFDQSxDQUFDOyIsCiAgIm5hbWVzIjogW10KfQo=
