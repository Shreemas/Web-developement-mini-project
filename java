import java.util.Scanner;

public class crc
{
static int data[],cs[];
static int g[]={1,0,0,0,1,0,0,0,0,0,0,1,0,0,0,0,1};
static int n,i,c,e,pos;
static int N= 17;
static void xor()
{
for(c=0;c<N;c++)
cs[c]=((cs[c]==g[c])?0:1);
}
static void crc()
{
for(i = 0;i<N;i++)
cs[i] = data[i];
do
{
if(cs[0]==1)
xor();
for(c=0;c<N-1;c++)
cs[c] = cs[c+1];
cs[c]=data[i++];
}
while(i<=n+N-1);
}
public static vod main(String args[])
{
cs= new int[100];
Scanner br = new Scanner(System.in);
System.out.println("enter the number of data bits");
n = br.nextInt();
data= new int[100];
System.out.println("enter the data bits");
for(i=0;i<n;i++)
data[i]=br.nextInt();
System.out.println("crc divisor");
for(i=0;i<N;;i++)
System.out.prinyln(g[i]);
for(int i=n;i<n+N-1;i++)
data[i]=0;
System.out.println("modified data");
for(i=0;i<n+N-1;i++)
System.out.println(data[i]);
crc();
System.out.println("crc checksum");
for(i = 0;i<N-1;i++)
System.out.println(cs[i]);
for(i=n;i<n+N-1;i++)
data[i] = cs[i-n];
System.out.println("final codeword");
for(i=0;i<n+N-1;i++)
System.out.println(data[i]);
System.out.println("test error detection 0(yes) 1(no)?");
e =br.nextInt();
if(e==0)
{
System.out.println("enter the position where the error to be inserted");
pos = br.nextInt();
data[pos]= (data[pos]==0)?1:0;
System.out.println("erroneousdata");
for(int i = 0;i<n+N-1;i++)
System.out.println(data[i]);

}
crc();
}
System.out.println("remainder");
for(ii=o;i<N;i++)
System.out.println(cs[i]);
for(i=0;i<n-1;i++)
{

if(cs[i]!=0)
{
System.out.println("error data");
}}
System.out.priln("no error");
}
}



















