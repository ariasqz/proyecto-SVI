from tracemalloc import start
import folium 

mapa=folium.Map(location=[6.55952,-73.13637],zoom_start=15.4)
mapa.save('/home/ariasqz/Escritorio/mapa-test.html')