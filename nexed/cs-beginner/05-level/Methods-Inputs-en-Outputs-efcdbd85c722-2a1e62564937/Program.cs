int[] a = Kubus.CalculateCubeVolume(5, 5, 5);
Console.WriteLine($"Volume = {a[0]} en oppervlakte = {a[1]}");

int[] b = Kubus.CalculateCubeVolume(10, 10, 10);
Console.WriteLine($"Volume = {b[0]} en oppervlakte = {b[1]}");

int[] c = Kubus.CalculateCubeVolume(20, 20, 20);
Console.WriteLine($"Volume = {c[0]} en oppervlakte = {c[1]}");

class Kubus
{
    public static int[] CalculateCubeVolume(int l, int b, int h)
    {
        int volume = l * b * h;
        int oppervlakte = l * b * 6;

        return new int[] { volume, oppervlakte };
    }
}