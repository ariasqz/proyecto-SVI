from tracemalloc import start
import folium 
from folium.plugins import HeatMap
import pandas as pd

ler=pd.read_excel('local.xlsx')
mapa=folium.Map(location=[6.55952,-73.13637],zoom_start=15.4)
localizacion=ler[[6.55952,6.55952]].values.tolist()
HeatMap(localizacion,radius=50).add_to(mapa)

mapa.save('/home/ariasqz/Escritorio/mapa-test.html')